<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo ($webtitle); ?></title>
<meta name="keywords" content="<?php echo ($keywords); ?>">
<meta name="description" content="<?php echo ($description); ?>">
<script language="javascript">var SitePath='<?php echo ($webpath); ?>';var SiteMid='<?php echo ($mid); ?>';var SiteCid='<?php echo ($cid); ?>';var SitePid='<?php echo ($pid); ?>';var SiteId='<?php echo ($id); ?>';</script>
<script language="JavaScript" type="text/javascript" src="<?php echo ($webpath); ?>views/js/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo ($webpath); ?>views/js/system.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo ($webpath); ?>views/js/history.js"></script>
<link rel='stylesheet' type='text/css' href='<?php echo ($webpath); ?>css/header.css'>
<link rel='stylesheet' type='text/css' href='<?php echo ($webpath); ?>css/top10.css'>
<script language="javascript">
$(document).ready(function(){
	$('#content').focus(function(){
		if($('#content').val()=='分享您的看法吧，最多200个字。'){
			$('#content').val('');
		}
	});
	$('#content').blur(function(){
		if($('#content').val()==''){
			$('#content').val('分享您的看法吧，最多200个字。');
		}
	});	
	$("#guestbook").submit( function () {
		if($('#content').val().length>200){
			alert('您输入的留言信息过长，请删减一些！');
  			return false;
		}
		if($('#content').val()=='分享您的看法吧，最多200个字。'){
			alert('请输入留言信息！');
  			return false;
		}		
	}); 
});
</script>
</head>
<body>
<div id="wrapper">
<div class="header">
	<h1 class="header_logo"><a href="<?php echo ($webpath); ?>" title="<?php echo ($webname); ?>" target="_self"><?php echo ($webname); ?></a></h1>
	<script type="text/javascript" src="<?php echo ($webpath); ?>js/search_content_utf8.js"></script>
	<div class="searchbox">
	<form method="post" action="<?php echo ($webpath); ?>index.php?s=video/search" onsubmit="return check();" style="z-index: -1;" name="search" id="search" target="_blank">
		<fieldset class="searchbox_search">
			<input id="wd" name="wd" onfocus="serchClick('wd')" autocomplete="off" value="<?php echo (($keyword)?($keyword):'Please type video name,director'); ?>" maxlength="26" type="text" class="input"/>
			<button type="submit" id="btnSearch" onclick="stopSearchTextTimer();">Search</button>
		</fieldset>
	</form>
	<script>
	var CachePic=[];
	function serchClick(name)
	{
		var box=document.getElementById(name);
		if(searchTextTimer!=null||box.value=='Please type video name,director')
		{box.value=''};
		stopSearchTextTimer();
		box.style.color='#000';
	}
	setSearchInputContent(document.getElementById("wd"));
	</script>
	<!--
	<?php echo ($topurl); ?>

	END-->
		<div class="searchbox_hottag">
			<a href="<?php echo ($webpath); ?>index.php">Hot play</a><?php echo ($hotkey); ?>
		</div>
	</div><!--searchbox  END-->
	<!--header 头部结束 
	<div class="userpanel_box">
		<div class="dy_top_box" style="display:none" id="dy_box">
			
		</div>
		<div class="userpanel" id="user_status"><a href="<?php echo ($newvideo); ?>" title="<?php echo date('Y-m-d');?>最近100部更新">Update today：[<?php echo get_channel_count(0);?>]</a>|<a href="<?php echo ($allvideo); ?>" title="全部影片">Total：[<?php echo get_channel_count(-1);?>]</a>|<a href="<?php echo ($releasevideo); ?>" title="新片上映">New </a></div>
	</div>
	<div class="quickpanel" id="quickpanel">
	</div>
	END-->
</div><!--header 头部结束 END-->
<div class="mainnav">
	<div class="mainnav_list">

    <a href="<?php echo ($webpath); ?>" <?php if($model == 'index'): ?>class="on"<?php endif; ?>>Home</a>
	<!--
    <?php $tag['name'] = 'menu'; $__LIST__ = get_tag_gxmenu($tag); if(is_array($__LIST__)): $i = 0;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): ++$i;$mod = ($i % 2 );?><a onfocus="this.blur();" href="<?php echo ($menu["showurl"]); ?>" <?php if(($menu['id'] == $cid) or ($menu['id'] == $pid)): ?>class="on"<?php endif; ?>><?php echo ($menu["cname"]); ?></a><?php endforeach; endif; else: echo "" ;endif;unset($__LIST__);unset($tag);?>
    <a href="<?php echo ($topurl); ?>" <?php if($model == 'top10'): ?>class="on"<?php endif; ?>>Range</a>
    <a href="<?php echo ($specialurl); ?>" <?php if($model == 'special'): ?>class="on"<?php endif; ?>>Special</a>
	END-->
	</div>
	<!--histroydrop
	<div class="dropbox dropbox_1">
	<script>
	var topShow=false;
	function showTop(n){
		if(topShow==true){
			switchTab('top',n,2,"dropbox_tigger dropbox_tigger_on","dropbox_tigger");
		}else{
			document.getElementById("Tab_top_"+n).className="dropbox_tigger dropbox_tigger_on";
			document.getElementById("List_top_"+n).style.display="";
			topShow=true;
		}
	}
	function hideTop(){
		for(i=0;i<2;i++) {
			var CurTabObj = document.getElementById("Tab_top_"+i) ;
			var CurListObj = document.getElementById("List_top_"+i) ;
			CurTabObj.className="dropbox_tigger" ;
			CurListObj.style.display="none";
		}
	}
	</script>
		  
		<a href="javascript://" title="" class="dropbox_tigger" id="Tab_top_0" onmouseover="showTop(0);" onmouseout="hideTop();" target="_self" ><b></b></a>
		
		<div class="histroydrop" style="display:none;" id="List_top_0" onmouseover="showTop(0);" onmouseout="hideTop();">
		</div>  
		
	</div>END-->
	<!--histroydrop  
	<div class="dropbox dropbox_2">
		<a href="javascript://" title="" class="dropbox_tigger" id="Tab_top_1" onmouseover="showTop(1);" onmouseout="hideTop();" target="_self">History<b></b></a>
		<div class="histroydrop" style="display:none;" id="List_top_1" onmouseover="showTop(1);" onmouseout="hideTop();">
		</div>
	</div>END-->
</div><!--mainnav 导航结束 END-->
<div class="wrapper R710L250">
<div class="navigation">
<!--
  <span>Current Location：</span><?php echo ($navtitle); ?>
END-->
</div>
<div class="box">
<div class="box_tt"><h2>I would like to say：</h2></div>
    <div style="padding:10px;">
    <form action="<?php echo ($webpath); ?>index.php?s=Guestbook/Insert" method="post" name="guestbook" id="guestbook">
    <input name="errid" type="hidden" value="<?php echo ($id); ?>" />  
  <?php if((C('user_post') == 1) and ($userid == 0)): ?><div class="guestbook_login">发表留言，请登录：<a href="<?php echo ($webpath); ?>index.php?s=user/login">登录</a>&nbsp;|&nbsp;<a href="index.php?s=user/reg">注册</a></div>
    <textarea id="guestbookInput" name="content" rows="5" onFocus="if(this.value=='分享您的看法吧，最多200个字。'){this.value='';};this.select();" onblur="if(this.value==''){this.value='分享您的看法吧，最多200个字。';};" class="txt_in" maxlength="200" disabled="disabled"></textarea>
    <p class="under_row"><button type="submit" class="sub_btn" name="submit" id="submitCommBtn" disabled><span>发表留言</span></button></p>
  <?php else: ?>
    <div style="margin:0 auto;width:600px"><textarea name="content"  id="content" rows="5" class="txt_in" maxlength="200" style="width:100%;"><?php echo (($content)?($content):'Share your opion, at most 200 words'); ?></textarea></div>
    <p style="margin:10px auto;width:600px;text-align:right;"><button type="submit" class="textarea_bar_btn" id="submit" onmouseover="this.className='textarea_bar_btn textarea_bar_btn_hover'" onmouseout="this.className='textarea_bar_btn'" style="border:none;"/><span>Submit</span></button></p><?php endif; ?>
    </form>
    </div>
</div>
<div class="box">
<div class="box_tt"><h2>Review：</h2></div>
    <!--留言列表-->
    <ul class="board_ul">
	<!--
	<?php echo (remove_xss(htmlspecialchars($guestbook["username"]))); ?>(<?php echo (GetIpAddress($guestbook["ip"])); ?>)
	END-->
        <?php if(is_array($list_guestbook)): $i = 0; $__LIST__ = $list_guestbook;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$guestbook): ++$i;$mod = ($i % 2 )?><li>
        <div class="guestbook_cont">
        <p><span class="time"><?php echo (date('Y-m-d H:i',$guestbook["addtime"])); ?></span><?php echo ($guestbook["floor"]); ?>Th：<strong>Guest</strong><br><?php echo (remove_xss(htmlspecialchars($guestbook["content"]))); ?></p></div>
        <?php if(!empty($guestbook["recontent"])): ?><div class="re_cont"><p class="re_title">站长回复：</p><p><?php echo ($guestbook["recontent"]); ?></p></div><?php endif; ?>
        </li><?php endforeach; endif; else: echo "" ;endif; ?>
    </ul>
    <?php if(($count)  >  "10"): ?><div class="pages"><?php echo ($pages); ?></div><?php endif; ?>
</div>
<div class="footer">
	<div class="copyright">
	<p><?php echo ($copyright); ?></p>
	<p class="p_2">Copyright &copy; 2007 - 2013 <a href="<?php echo ($weburl); ?>"><?php echo ($webname); ?></a><!-- Some Rights Reserved <?php echo ($icp); ?> <a href="<?php echo ($baidusitemap); ?>">百度地图</a> END--><?php echo ($icp); ?><a href="<?php echo ($googlesitemap); ?>">Google Map</a> <!--<?php echo ($tongji); ?>END-->  <script language=javascript>
<!--
window["\x64\x6f\x63\x75\x6d\x65\x6e\x74"]["\x77\x72\x69\x74\x65\x6c\x6e"]("\u8d44\u6e90\u63d0\u4f9b\x3a\x3c\x61 \x68\x72\x65\x66\x3d\"\x68\x74\x74\x70\x3a\/\/\x62\x62\x73\x2e\x67\x6f\x70\x65\x2e\x63\x6e\/\" \x74\x61\x72\x67\x65\x74\x3d\"\x5f\x62\x6c\x61\x6e\x6b\" \x73\x74\x79\x6c\x65\x3d\"\x63\x6f\x6c\x6f\x72\x3a\x23\x33\x33\x36\x36\x30\x30\x3b\" \x3e\x3c\x62\x3e\u72d7\u6251\u6e90\u7801\u793e\u533a\x3c\/\x62\x3e\x3c\/\x61\x3e");
END-->
</script></p>
	</div>
</div>
</div>
</body>
</html>