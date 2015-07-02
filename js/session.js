/*
 * A JavaScript implementation of the RSA Data Security, Inc. MD5 Message
 * Digest Algorithm, as defined in RFC 1321.
 * Version 2.1 Copyright (C) Paul Johnston 1999 - 2002.
 * Other contributors: Greg Holt, Andrew Kepert, Ydnar, Lostinet
 * Distributed under the BSD License
 * See http://pajhome.org.uk/crypt/md5 for more info.
 *
 * Updated by Felipe Gasper <gasperfm@uc.edu> to use JavaScript prototypes
 */

/*
 * Configurable variables. You may need to tweak these to be compatible with
 * the server-side, but the defaults work in most cases.
 */
var hexcase = 0;  /* hex output format. 0 - lowercase; 1 - uppercase        */
var b64pad  = ""; /* base-64 pad character. "=" for strict RFC compliance   */
var chrsz   = 8;  /* bits per input character. 8 - ASCII; 16 - Unicode      */

/*
 * These are the functions you'll usually want to call
 * They take string arguments and return either hex or base-64 encoded strings
 */

String.prototype.binArray = function() {
  return core_md5(this.toBinL(), this.length * chrsz);
}

//function hex_md5(s){ return binl2hex(core_md5(strtoBinL(s), s.length * chrsz));}
String.prototype.hex_md5 = function() {
  return binl2hex(this.binArray());
}
function hex_md5(s) {
  return s.hex_md5();
}
//function b64_md5(s){ return binl2b64(core_md5(strtoBinL(s), s.length * chrsz));}
String.prototype.b64_md5 = function() {
  return binl2b64(this.binArray());
}
//function str_md5(s){ return binl2str(core_md5(strtoBinL(s), s.length * chrsz));}
String.prototype.str_md5 = function() {
  return binl2str(this.binArray());
}
//function hex_hmac_md5(key, data) { return binl2hex(core_hmac_md5(key, data)); }
String.prototype.hex_hmac_md5 = function(key) {
  return binl2hex(this.core_hmac_md5(key));
}
//function b64_hmac_md5(key, data) { return binl2b64(core_hmac_md5(key, data)); }
String.prototype.b64_hmac_md5 = function(key) {
  return binl2b64(this.core_hmac_md5(key));
}
//function str_hmac_md5(key, data) { return binl2str(core_hmac_md5(key, data)); }
String.prototype.str_hmac_md5 = function(key) {
  return binl2str(this.core_hmac_md5(key));
}

/*
 * Perform a simple self-test to see if the VM is working
 */
function md5_vm_test()
{
  return "abc".hex_md5() == "900150983cd24fb0d6963f7d28e17f72";
}

/*
 * Calculate the MD5 of an array of little-endian words, and a bit length
 */
//function core_md5(x, len)
function core_md5 (x,len)
{
  /* append padding */
  x[len >> 5] |= 0x80 << ((len) % 32);
  x[(((len + 64) >>> 9) << 4) + 14] = len;

  var a =  1732584193;
  var b = -271733879;
  var c = -1732584194;
  var d =  271733878;

  for(var i = 0; i < x.length; i += 16)
  {
    var olda = a;
    var oldb = b;
    var oldc = c;
    var oldd = d;

    a = md5_ff(a, b, c, d, x[i+ 0], 7 , -680876936);
    d = md5_ff(d, a, b, c, x[i+ 1], 12, -389564586);
    c = md5_ff(c, d, a, b, x[i+ 2], 17,  606105819);
    b = md5_ff(b, c, d, a, x[i+ 3], 22, -1044525330);
    a = md5_ff(a, b, c, d, x[i+ 4], 7 , -176418897);
    d = md5_ff(d, a, b, c, x[i+ 5], 12,  1200080426);
    c = md5_ff(c, d, a, b, x[i+ 6], 17, -1473231341);
    b = md5_ff(b, c, d, a, x[i+ 7], 22, -45705983);
    a = md5_ff(a, b, c, d, x[i+ 8], 7 ,  1770035416);
    d = md5_ff(d, a, b, c, x[i+ 9], 12, -1958414417);
    c = md5_ff(c, d, a, b, x[i+10], 17, -42063);
    b = md5_ff(b, c, d, a, x[i+11], 22, -1990404162);
    a = md5_ff(a, b, c, d, x[i+12], 7 ,  1804603682);
    d = md5_ff(d, a, b, c, x[i+13], 12, -40341101);
    c = md5_ff(c, d, a, b, x[i+14], 17, -1502002290);
    b = md5_ff(b, c, d, a, x[i+15], 22,  1236535329);

    a = md5_gg(a, b, c, d, x[i+ 1], 5 , -165796510);
    d = md5_gg(d, a, b, c, x[i+ 6], 9 , -1069501632);
    c = md5_gg(c, d, a, b, x[i+11], 14,  643717713);
    b = md5_gg(b, c, d, a, x[i+ 0], 20, -373897302);
    a = md5_gg(a, b, c, d, x[i+ 5], 5 , -701558691);
    d = md5_gg(d, a, b, c, x[i+10], 9 ,  38016083);
    c = md5_gg(c, d, a, b, x[i+15], 14, -660478335);
    b = md5_gg(b, c, d, a, x[i+ 4], 20, -405537848);
    a = md5_gg(a, b, c, d, x[i+ 9], 5 ,  568446438);
    d = md5_gg(d, a, b, c, x[i+14], 9 , -1019803690);
    c = md5_gg(c, d, a, b, x[i+ 3], 14, -187363961);
    b = md5_gg(b, c, d, a, x[i+ 8], 20,  1163531501);
    a = md5_gg(a, b, c, d, x[i+13], 5 , -1444681467);
    d = md5_gg(d, a, b, c, x[i+ 2], 9 , -51403784);
    c = md5_gg(c, d, a, b, x[i+ 7], 14,  1735328473);
    b = md5_gg(b, c, d, a, x[i+12], 20, -1926607734);

    a = md5_hh(a, b, c, d, x[i+ 5], 4 , -378558);
    d = md5_hh(d, a, b, c, x[i+ 8], 11, -2022574463);
    c = md5_hh(c, d, a, b, x[i+11], 16,  1839030562);
    b = md5_hh(b, c, d, a, x[i+14], 23, -35309556);
    a = md5_hh(a, b, c, d, x[i+ 1], 4 , -1530992060);
    d = md5_hh(d, a, b, c, x[i+ 4], 11,  1272893353);
    c = md5_hh(c, d, a, b, x[i+ 7], 16, -155497632);
    b = md5_hh(b, c, d, a, x[i+10], 23, -1094730640);
    a = md5_hh(a, b, c, d, x[i+13], 4 ,  681279174);
    d = md5_hh(d, a, b, c, x[i+ 0], 11, -358537222);
    c = md5_hh(c, d, a, b, x[i+ 3], 16, -722521979);
    b = md5_hh(b, c, d, a, x[i+ 6], 23,  76029189);
    a = md5_hh(a, b, c, d, x[i+ 9], 4 , -640364487);
    d = md5_hh(d, a, b, c, x[i+12], 11, -421815835);
    c = md5_hh(c, d, a, b, x[i+15], 16,  530742520);
    b = md5_hh(b, c, d, a, x[i+ 2], 23, -995338651);

    a = md5_ii(a, b, c, d, x[i+ 0], 6 , -198630844);
    d = md5_ii(d, a, b, c, x[i+ 7], 10,  1126891415);
    c = md5_ii(c, d, a, b, x[i+14], 15, -1416354905);
    b = md5_ii(b, c, d, a, x[i+ 5], 21, -57434055);
    a = md5_ii(a, b, c, d, x[i+12], 6 ,  1700485571);
    d = md5_ii(d, a, b, c, x[i+ 3], 10, -1894986606);
    c = md5_ii(c, d, a, b, x[i+10], 15, -1051523);
    b = md5_ii(b, c, d, a, x[i+ 1], 21, -2054922799);
    a = md5_ii(a, b, c, d, x[i+ 8], 6 ,  1873313359);
    d = md5_ii(d, a, b, c, x[i+15], 10, -30611744);
    c = md5_ii(c, d, a, b, x[i+ 6], 15, -1560198380);
    b = md5_ii(b, c, d, a, x[i+13], 21,  1309151649);
    a = md5_ii(a, b, c, d, x[i+ 4], 6 , -145523070);
    d = md5_ii(d, a, b, c, x[i+11], 10, -1120210379);
    c = md5_ii(c, d, a, b, x[i+ 2], 15,  718787259);
    b = md5_ii(b, c, d, a, x[i+ 9], 21, -343485551);

    a = a.safe_add(olda);
    b = b.safe_add(oldb);
    c = c.safe_add(oldc);
    d = d.safe_add(oldd);
  }
  return Array(a, b, c, d);

}

/*
 * These functions implement the four basic operations the algorithm uses.
 */
function md5_cmn(q, a, b, x, s, t)
{
  return a.safe_add(q).safe_add(x).safe_add(t).bit_rol(s).safe_add(b);
}
function md5_ff(a, b, c, d, x, s, t)
{
  return md5_cmn((b & c) | ((~b) & d), a, b, x, s, t);
}
function md5_gg(a, b, c, d, x, s, t)
{
  return md5_cmn((b & d) | (c & (~d)), a, b, x, s, t);
}
function md5_hh(a, b, c, d, x, s, t)
{
  return md5_cmn(b ^ c ^ d, a, b, x, s, t);
}
function md5_ii(a, b, c, d, x, s, t)
{
  return md5_cmn(c ^ (b | (~d)), a, b, x, s, t);
}

/*
 * Calculate the HMAC-MD5, of a key and some data
 */
//function core_hmac_md5(key, data)
String.prototype.core_hmac_md5 = function(key)
{
  var bkey = strtoBinL(key);
  if(bkey.length > 16) bkey = core_md5(bkey, key.length * chrsz);

  var ipad = Array(16), opad = Array(16);
  for(var i = 0; i < 16; i++)
  {
    ipad[i] = bkey[i] ^ 0x36363636;
    opad[i] = bkey[i] ^ 0x5C5C5C5C;
  }

  var hash = core_md5(ipad.concat(this.toBinL()), 512 + this.length * chrsz);
  return core_md5(opad.concat(hash), 512 + 128);
}

/*
 * Add integers, wrapping at 2^32. This uses 16-bit operations internally
 * to work around bugs in some JS interpreters.
 */
//function safe_add(x, y)
Number.prototype.safe_add = function(y)
{
  var lsw = (this & 0xFFFF) + (y & 0xFFFF);
  var msw = (this >> 16) + (y >> 16) + (lsw >> 16);
  return (msw << 16) | (lsw & 0xFFFF);
}

/*
 * Bitwise rotate a 32-bit number to the left.
 */
//function bit_rol(num, cnt)
Number.prototype.bit_rol = function(cnt)
{
  return (this << cnt) | (this >>> (32 - cnt));
}

/*
 * Convert a string to an array of little-endian words
 * If chrsz is ASCII, characters >255 have their hi-byte silently ignored.
 */
//function strtoBinL(str)
String.prototype.toBinL = function()
{
  var bin = Array();
  var mask = (1 << chrsz) - 1;
  for(var i = 0; i < this.length * chrsz; i += chrsz)
    bin[i>>5] |= (this.charCodeAt(i / chrsz) & mask) << (i%32);
  return bin;
}

/*
 * Convert an array of little-endian words to a string
 */
function binl2str(bin)
{
  var str = "";
  var mask = (1 << chrsz) - 1;
  for(var i = 0; i < bin.length * 32; i += chrsz)
    str += String.fromCharCode((bin[i>>5] >>> (i % 32)) & mask);
  return str;
}

/*
 * Convert an array of little-endian words to a hex string.
 */
function binl2hex(binarray)
{
  var hex_tab = hexcase ? "0123456789ABCDEF" : "0123456789abcdef";
  var str = "";
  for(var i = 0; i < binarray.length * 4; i++)
  {
    str += hex_tab.charAt((binarray[i>>2] >> ((i%4)*8+4)) & 0xF) +
           hex_tab.charAt((binarray[i>>2] >> ((i%4)*8  )) & 0xF);
  }
  return str;
}

/*
 * Convert an array of little-endian words to a base-64 string
 */
function binl2b64(binarray)
{
  var tab = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/";
  var str = "";
  for(var i = 0; i < binarray.length * 4; i += 3)
  {
    var triplet = (((binarray[i   >> 2] >> 8 * ( i   %4)) & 0xFF) << 16)
                | (((binarray[i+1 >> 2] >> 8 * ((i+1)%4)) & 0xFF) << 8 )
                |  ((binarray[i+2 >> 2] >> 8 * ((i+2)%4)) & 0xFF);
    for(var j = 0; j < 4; j++)
    {
      if(i * 8 + j * 6 > binarray.length * 32) str += b64pad;
      else str += tab.charAt((triplet >> 6*(3-j)) & 0x3F);
    }
  }
  return str;
}


















if (!c_getCookie) {
	var c_getCookie = function(sName){
		var sSearch = sName + "=";
		var iOffset = document.cookie.indexOf(sSearch);
		if (iOffset != -1) {
			iOffset += sSearch.length;
			var iEnd = document.cookie.indexOf(";", iOffset);
			if (iEnd == -1)
				iEnd = document.cookie.length;
			return unescape(document.cookie.substring(iOffset, iEnd));
		}else 
			return "";
	}
}

if (!c_setCookie) {
	var c_setCookie = function (sName,sValue,sHours){
		if(arguments.length>2){
			var expireDate=new Date(new Date().getTime()+sHours*3600000);
			document.cookie = sName + "=" + escape(sValue) + "; path=/; domain=ziyuan5.com; expires=" + expireDate.toGMTString();
		}else
			document.cookie = sName + "=" + escape(sValue) + "; path=/; domain=ziyuan5.com"; 
	}
}



// Ψһ��cookie
var kankan_web_uid = c_getCookie("KANKANSEARCHSID") ;
if (!kankan_web_uid || kankan_web_uid == 'undefined'){
	var random = Math.random();
	var browser = navigator['appName'] + '_' + navigator['appVersion'] + '_' + navigator['userAgent'] + '_' + navigator['appCodeName'] + '_' + navigator['platform'] ;
	var nowtime = new Date() ;
	var nowtime_sec = nowtime.valueOf() ;
	var kankan_web_uid = (nowtime_sec + browser + random).hex_md5() ;
	c_setCookie("KANKANSEARCHSID" , kankan_web_uid) ;
}


function setCookie(name,value,hours){
    if(arguments.length>2){
        var expireDate=new Date(new Date().getTime()+hours*3600000);
        document.cookie = name + "=" + encodeURIComponent(value) + "; path=/; domain=ziyuan5.com; expires=" + expireDate.toGMTString();
    }else{
        document.cookie = name + "=" + encodeURIComponent(value) + "; path=/; domain=ziyuan5.com";
    }
}
if(typeof getCookie=='undefined'){
	function getCookie(name){
		try{
			var str = (document.cookie.match(new RegExp("(^"+name+"| "+name+")=([^;]*)"))==null)?"":decodeURIComponent(RegExp.$2);
			if (str != '') {
				return str;
			}else {return "";}
		}catch(e){
			return "";
		};
	}
}





var kkpgv_value = kkpgv_value_pre;
kkpgv_value.sessionid = c_getCookie("KANKANSEARCHSID");



var sk = 'u=search_page_v2&u1='+kkpgv_value.title+'&'+
			'u2='+kkpgv_value.page+'&'+
			'u3='+kkpgv_value.movie_ids+'&'+
			'u4='+kkpgv_value.center_word+'&'+
			'u5='+kkpgv_value.sessionid+'&'+
			'u6='+c_getCookie("KANKANWEBUID")+'&'+
			'rd=' + parseInt(Math.random() * 99999);
//send_kkpgv(0, sk);
document.write("<img src=\"http://kkpgv2.ziyuan5.com/?"+sk+"\" width=\"0\" height=\"0\" frameborder=\"0\"><\/img>");
var allAnchor = document.getElementsByTagName('a');
var canAddEventListener = allAnchor[0].addEventListener;
if (canAddEventListener) {
	for (var anchorLength=allAnchor.length; anchorLength>0; anchorLength--) {
		(function () {
			var currentAnchor = allAnchor[anchorLength-1];
			currentAnchor.addEventListener('click', function() {
				var wlh = window.location.href.replace(/keyword=[^&]*/ig,"keyword="+kkpgv_value.title);
				u1 = encodeURIComponent(wlh);
				u2 = encodeURIComponent(currentAnchor.href);
				u3 = '0';
				u4 = '0';
				u5 = '0';
				u6 = '0';
				u7 = c_getCookie("KANKANSEARCHSID");
				u8 = '0';
				try {
					if (currentAnchor.pgvflag != 'undefined') {
						var tmp = currentAnchor.pgvflag.split(',');
						u3 = tmp[0]=='0'?0:1;
						u4 = tmp[1];
						u5 = tmp[2];
						u6 = tmp[0];
						u8 = typeof tmp[3] != 'undefined' ? tmp[3] : 0;
					}
				} catch (e) {}
				var tmpclickpgv2img = new Image(1,1);
				tmpclickpgv2img.src = 'http://kkpgv2.ziyuan5.com/?' + 'u=search_page_click_v2&u1='+u1+'&u2='+u2+'&u3='+u3+'&u4='+u4+'&u5='+u5+'&u6='+u6+'&u7='+u7+'&u8='+u8+'&rd=' + parseInt(Math.random() * 99999) + '';
				/*
				if (currentAnchor.href.indexOf('search.ziyuan5.com/search.php') != -1) {
					setTimeout(function(){
						window.location = currentAnchor.href;
					},360);
					return false;
				} else {
					currentAnchor.target = '_blank';
					return true;
				}
				*/
				//send_kkpgv(0, 'u=search_page_click_v2&u1='+u1+'&u2='+u2+'&u3='+u3+'&u4='+u4+'&u5='+u5+'&u6='+u6+'&u7='+u7+'&u8='+u8+'&rd=' + parseInt(Math.random() * 99999) + '');
			}, false);
		})();		
	};
	document.getElementById('btnSearch').addEventListener('click', function() {
		var wlh = window.location.href.replace(/keyword=[^&]*/ig,"keyword="+kkpgv_value.title);
		u1 = encodeURIComponent(wlh);
		u2 = encodeURIComponent('http://search.ziyuan5.com/search.php?keyword='+document.getElementById('searchbox1').value);
		u3 = 0;
		u4 = 0;
		u5 = 0;
		u6 = 0;
		u7 = c_getCookie("KANKANSEARCHSID");;
		u8 = 0;
		var tmpclickpgv2img = new Image(1,1);		
		tmpclickpgv2img.src = 'http://kkpgv2.ziyuan5.com/?' + 'u=search_page_click_v2&u1='+u1+'&u2='+u2+'&u3='+u3+'&u4='+u4+'&u5='+u5+'&u6='+u6+'&u7='+u7+'&u8='+u8+'&rd=' + parseInt(Math.random() * 99999) + '';
	}, false);
} else {
	for (var anchorLength=allAnchor.length; anchorLength>0; anchorLength--) {
		(function () {
			var currentAnchor = allAnchor[anchorLength-1];
			currentAnchor.attachEvent('onclick', function() {
				var wlh = window.location.href.replace(/keyword=[^&]*/ig,"keyword="+kkpgv_value.title);
				u1 = encodeURIComponent(wlh);
				u2 = encodeURIComponent(currentAnchor.href);
				u3 = '0';
				u4 = '0';
				u5 = '0';
				u6 = '0';
				u7 = c_getCookie("KANKANSEARCHSID");
				u8 = '0';
				try {
					if (currentAnchor.pgvflag != 'undefined') {
						var tmp = currentAnchor.pgvflag.split(',');
						u3 = tmp[0]=='0'?0:1;
						u4 = tmp[1];
						u5 = tmp[2];
						u6 = tmp[0];	
						u8 = typeof tmp[3] != 'undefined' ? tmp[3] : 0;		
					}
				} catch (e) {}
				var tmpclickpgv2img = new Image(1,1);
				tmpclickpgv2img.src = 'http://kkpgv2.ziyuan5.com/?' + 'u=search_page_click_v2&u1='+u1+'&u2='+u2+'&u3='+u3+'&u4='+u4+'&u5='+u5+'&u6='+u6+'&u7='+u7+'&u8='+u8+'&rd=' + parseInt(Math.random() * 99999) + '';
				/*
				if (currentAnchor.href.indexOf('search.ziyuan5.com/search.php') != -1) {
					setTimeout(function(){
						window.location = currentAnchor.href;
					},360);
					return false;
				} else {
					//currentAnchor.target = '_blank';
					return true;
				}
				*/
				//send_kkpgv(0, 'u=search_page_click_v2&u1='+u1+'&u2='+u2+'&u3='+u3+'&u4='+u4+'&u5='+u5+'&u6='+u6+'&u7='+u7+'&u8='+u8+'&rd=' + parseInt(Math.random() * 99999) + '');
			});
		})();		
	}
	document.getElementById('btnSearch').attachEvent('onclick', function() {
		var wlh = window.location.href.replace(/keyword=[^&]*/ig,"keyword="+kkpgv_value.title);
		u1 = encodeURIComponent(wlh);
		u2 = encodeURIComponent('http://search.ziyuan5.com/search.php?keyword='+document.getElementById('searchbox1').value);
		u3 = 0;
		u4 = 0;
		u5 = 0;
		u6 = 0;
		u7 = c_getCookie("KANKANSEARCHSID");;
		u8 = 0;
		var tmpclickpgv2img = new Image(1,1);
		tmpclickpgv2img.src = 'http://kkpgv2.ziyuan5.com/?' + 'u=search_page_click_v2&u1='+u1+'&u2='+u2+'&u3='+u3+'&u4='+u4+'&u5='+u5+'&u6='+u6+'&u7='+u7+'&u8='+u8+'&rd=' + parseInt(Math.random() * 99999) + '';
	});
}



//document.write('<img src="http://kkpgv.ziyuan5.com/?u=search_page&u1=' + encodeURIComponent(location.href) + '&rd=' + parseInt(Math.random() * 10000) + '" style="display:none;" />');

/*
if (typeof G_MOVIE_OVERSEA != 'undefined' && G_MOVIE_OVERSEA) {
	for (var filterAnimei=1; filterAnimei<=10; filterAnimei++) {
		try {
			alink = $('reusltbox_links_playlink_'+filterAnimei);
			alink.style.display = 'block'; 
		} catch (e) {}
		try {
			alink = $('diversity_'+filterAnimei);
			alink.style.display = 'block'; 
		} catch (e) {}		
	}
} else {
	for (var filterAnimei=1; filterAnimei<=10; filterAnimei++) {
		try {
			alink = $('reusltbox_links_playlink_'+filterAnimei);
			alinkp = alink.parentNode;
			if (alink.style.display=='none') {
				alinkp.innerHTML = '<b></b>�ݲ�֧�ֵ㲥'+alinkp.innerHTML;
			}
		} catch (e) {}	
	}	
}
*/

var thispagemoviearr = thispagemovie.split(',');

try {
	if(document.getElementById("recommend-list-movie")){
		var movielist = document.getElementById("recommend-list-movie");	
	}else if(document.getElementById("recommend-list-teleplay")){
		var movielist = document.getElementById("recommend-list-teleplay");
	}

	for(var i=0;i<thispagemoviearr.length;i++){
		var movieli = movielist.children;
		for(var m=0;m<movieli.length;m++){
			if(movieli[m].getAttribute('movieid') == thispagemoviearr[i]){
				movieli[m].style.display = "none";
			}
		}	
	}
}catch (e) {}	

function switchshow(m){
	if(m<0||m>6) m=0;
	for(var i=0;i<7;i++){
		try {
			document.getElementById("tagbox_tt_"+i).className="tagbox_tt";
			document.getElementById("tagbox_con_"+i).style.display="none";	
		} catch (e) {}
	}
	document.getElementById("tagbox_tt_"+m).className="tagbox_tt tagbox_tt_on";
	document.getElementById("tagbox_con_"+m).style.display="";	
	return true;
}
