/**
 * @name 系统ajax插件+默认JS包
 * @time 2011-8-11
 * @eg (在模板需要的地方插入即可) 示例如下
 * <div id="Login" class="login"></div>
 * <span id="Score">{$score}</span> <span id="Scorenum">{$score}</span>分 <span id="Scoreer">{$scoreer}</span>人
 * <div id="Comments"></div>
 * <font id="Up" class="Up">{$up}</font><font id="Down" class="Down">{$down}</font>
 * <span id="GxPlayer" class="GxPlayer">内容页或播放页</span>
 * <a href="javascript:void(0)" id="fav">添加收藏夹</a>
**/
$(document).ready(function(){
	//收藏本站
	$("#fav").click(function(){
		AddFav();
	});					   
	//用户信息初始化
	if($("#Login").length>0){
		LoginShow();
	}
	//积分初始化
	if($("#Score").length>0 || $("#Scorenum").length>0){
		//静态模式下需要从数据库初始积分(通过检测.Score来完成)
		if($(".Scorenum").html() || $(".Score").html()){
			$.ajax({
				type: 'get',
				url: SitePath+'index.php?s='+GetModel(SiteMid)+'/score/id/'+SiteId,
				success:PlusScore
			});
		}else{
			PlusScore($("#Scorenum").html()+':'+$("#Scoreer").html(),'');
		}
	}
	//评论初始化
	if($("#Comments").length>0){
		CommentShow(SitePath+"index.php?s=comment/lists/mid/"+SiteMid+"/did/"+SiteId+"/p/1/order/addtime");
	}
	if($("#Comments2").length>0){
		CommentShow2(SitePath+"index.php?s=comment/lists/mid/"+SiteMid+"/did/"+SiteId+"/p/1/order/up");
	}
	//顶踩初始化
	if($("#Up").length>0 || $("#Down").length>0){
		//静态模式下需要从数据库初始化数据(通过检测.Up/.Down来完成)
		if($(".Up").html() || $(".Down").html()){
			UpdownShow(SitePath+'index.php?s='+GetModel(SiteMid)+'/updown/id/'+SiteId,'');
		}
		$('#Up').click(function(){
			UpdownShow(SitePath+'index.php?s='+GetModel(SiteMid)+'/updown/id/'+SiteId,'up');
		})
		$('#Down').click(function(){
			UpdownShow(SitePath+'index.php?s='+GetModel(SiteMid)+'/updown/id/'+SiteId,'down');
		})
	}
	//评论总数初始化
	if($("#comment_count").length>0){
			Comment_count(SiteId);
	}
	//收费影片控制
	if($("#GxPlayer").length>0){
		$("#Player").css({width:player_width,height:player_height});
		$("#PlayerTitle").css({width:player_width});
		if($("#GxPlayer").attr('class') == 'Userpay'){
			$("#GxPlayer").load(SitePath+"index.php?s=play/show/id/"+SiteId);
		}
	}
});
function LoginShow(){
	$("#Login").html('<a href="'+SitePath+'index.php?s=user/login">Login</a>&nbsp;|&nbsp;<a href="'+SitePath+'index.php?s=user/reg" target="_blank">Register</a>');
	$.ajax({
		type: 'get',
		url: SitePath+"index.php?s=login",
		timeout: 3000,
		success:function($string){	
			if($string != 'false'){
				$("#Login").html($string);
			}
		}
	});
}
function Comment_count($id){
	$.ajax({
		type: 'post',
		url: SitePath+'index.php?s=comment/comment_count/mid/'+SiteMid+'/did/'+SiteId,
		timeout: 3000,
		success:function($html){
			$html = eval("(" + $html + ")");
			if($html.status==1){
				$("#comment_count").html($html.data);
				$("#comment_count2").html($html.data);
			}else{
				$("#comment_count").html('0');
				$("#comment_count2").html('0');
			}
		}
	});	
}
function UpdownShow($ajaxurl,$ajaxtype){
	$.ajax({
		type: 'get',
		url: $ajaxurl+'/ajax/'+$ajaxtype,
		timeout: 300000000,
		success:function($html){
			if($html!=0){
				$("#UpNum").html($html.split(':')[0]);
				$("#DownNum").html($html.split(':')[1]);
				if($ajaxtype){alert('Success vote！');}
			}else{
				alert('You already did！');
			}
		}
	});	
}
function UpdownShow2($ajaxurl,$ajaxtype,$id){
	$.ajax({
		   type:'get',
		   url:$ajaxurl+'/ajax/'+$ajaxtype,
		   timeout:300000000,
		   success:function($html){
			   if($html!=0){
				   $("#cup"+$id).html("顶["+$html.split(':')[0]+"]")
				   $("#cdown"+$id).html("踩["+$html.split(':')[1]+"]")
			   }else{
				alert('You already did！');
				}
		   }
	});
}
function cup($id){
	UpdownShow2(SitePath+'index.php?s=comment/updown/id/'+$id,'up',$id);
}
function cdown($id){
	UpdownShow2(SitePath+'index.php?s=comment/updown/id/'+$id,'down',$id)
}
function CommentShow($ajaxurl){
	/*$("#Comments").ajaxStart(function(){
		$("#Comments").html('评论加载中...');
	});*/
	$("#Comments").html('Review loading...');
	$.ajax({
		type: 'get',
		url: $ajaxurl,
		timeout: 50000,
		error: function(){
			$("#Comments").html('Loading fail');
		},
		success:function($html){	
			$("#Comments").html($html);
		}
	});
}
function CommentShow2($ajaxurl){
	/*$("#Comments").ajaxStart(function(){
		$("#Comments").html('评论加载中...');
	});*/
	$("#Comments2").html('Review loading...');
	$.ajax({
		type: 'get',
		url: $ajaxurl,
		timeout: 50000,
		error: function(){
			$("#Comments2").html('Loading fail');
		},
		success:function($html){	
			$("#Comments2").html($html);
		}
	});
}
function CommentPost(){
	if($("#comment_content").val()==''){
		$("#errorS").html('Submit your opinion！');
		setTimeout("$('#errorS').html('')",5000);
		//alert('请发表您的评论观点！');
		return false;
	}
	//var $data = "mid="+SiteMid+"&did="+SiteId+"&cid="+$("#cid").val()+"&content="+$("#comment_content").val()+'&__gxcmsform__='+$("input[name='__gxcmsform__']").val();
	var $data = "mid="+SiteMid+"&did="+SiteId+"&content="+$("#comment_content").val()+'&__gxcmsform__='+$("input[name='__gxcmsform__']").val();
	$.ajax({
		type: 'post',
		url: SitePath+'index.php?s=comment/insert',
		data: $data,
		dataType:'json',
		success:function($string){
			CommentShow(SitePath+"index.php?s=comment/lists/mid/"+SiteMid+"/did/"+SiteId+"/p/1");
			Comment_count(SiteId);
			$("#errorS").html('');
			$("#tipS").html($string.info);
			setTimeout("$('#tipS').html('')",5000);
		}
	});
}
function PlusScore($html,$status){
	//去除与创建title提示
	$("#Scoretitle").remove();
	$("#Score").after('<div id="Scoretitle" style="display:none;"></div>');
	//显示title提示内容
	if($status == 'onclick'){
		$("#Scoretitle").html('Success！');
		$("#Scoretitle").show();
		$status = '';
	}	
	//展示星级>评分>评分人
	$("#Score").html(ScoreShow($html.split(':')[0]));
	$("#Scorenum").html($html.split(':')[0]);
	$("#Scoreer").html($html.split(':')[1]);
	//鼠标划过
	$("#Score>span").mouseover(function(){
		$id = $(this).attr('id')*1;
		$("#Scoretitle").html(ScoreTitle($id*2));
		$("#Scoretitle").show();
		//刷新星级图标
		$bgurl = $(this).css('background-image');
		for(i=0;i<5;i++){
			if(i>$id){
				$("#Score>#"+i+"").css({background:$bgurl+" 41px 0 repeat"});
			}else{
				$("#Score>#"+i+"").css({background:$bgurl});
			}
		}
	});
	//鼠标移出
	$("#Score>span").mouseout(function(){
		//去除title提示						   
		$("#Scoretitle").hide();
		//刷新星级图标
		$score = $html.split(':')[0]*1/2;
		$id = $(this).attr('id')*1;
		$bgurl = $(this).css('background-image');
		for(i=0;i<5;i++){
			if(i<Math.round($score)){
				if(i == parseInt($score)){
					$("#Score>#"+i+"").css({background:$bgurl+" 20px 0 repeat"});
				}else{
					$("#Score>#"+i+"").css({background:$bgurl});
				}
			}else{
				$("#Score>#"+i+"").css({background:$bgurl+" 41px 0 repeat"});
			}
		}
	});
	//鼠标点击
	$("#Score>span").click(function(){
		//刷新星级图标
		$.ajax({
			type: 'get',
			url: SitePath+'index.php?s='+GetModel(SiteMid)+'/score/id/'+SiteId+'/ajax/'+($(this).attr('id')*1+1),
			success:function($html){
				if($html=='0'){
					$("#Scoretitle").html('You already did！');
				}else{
					PlusScore($html,'onclick');
				}
			}
		});
	});	
}
//星级评分展示
function ScoreShow($score){
	var $html = '';
	$score = $score/2;
	for(var i = 0 ; i<5; i++){
		var classname = 'star-vote-all';
		if(i < $score && i<Math.round($score)){
			if(i == parseInt($score)){
				classname = 'star-vote-half';
			}
		}else{
			classname = 'star-vote-none';
		}
		$html += '<span id="'+i+'" class="'+classname+'"></span>';// title="'+ScoreTitle(i*2)+'"
	}
	return $html;
}
//星级鼠标浮层提示信息
function ScoreTitle($score){
	var array_str = ['Bad！','NO bad！','normal！','good！','recommand！'];
	var $score = parseFloat($score);
	if($score < 2.0) return array_str[0];
	if($score>=2.0 && $score<4.0) return array_str[1];
	if($score>=4.0 && $score<6.0) return array_str[2];
	if($score>=6.0 && $score<8.0) return array_str[3];
	if($score>=8.0) return array_str[4];
}
//获取模型名称
function GetModel($mid){
	if($mid == '1') return 'video';
	if($mid == '2') return 'info';
	if($mid == '3') return 'special';
}
//添加到收藏夹
function AddFav(){
	var url = window.location.href;
	try{
		window.external.addFavorite(url,document.title);
	}catch(err){
		try{
			window.sidebar.addPanel(document.title, url,"");
		}catch(err){
			alert("加入收藏失败，请使用Ctrl+D进行添加");
		}
	}	
}
//评论字数控制
function sp(){
    var tex = $("#comment_content").val();
    var num = tex.length;
    $("#span").html(200-num);
}
//屏蔽错误JS
window.onerror=function(){return true;}
window.onerror = ResumeError;