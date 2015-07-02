<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE7" />
<title>最新<?php echo ($cname); ?>在线观看-百度影音高清-<?php echo ($webname); ?></title>
<meta name="keywords" content="最新<?php echo ($cname); ?>,<?php if($pid == 1): ?><?php $tag['name'] = 'video';$tag['cid'] = '1';$tag['limit'] = '10';$tag['order'] = 'dayhits desc'; $__LIST__ = get_tag_gxcms($tag); if(is_array($__LIST__)): $i = 0;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$video): ++$i;$mod = ($i % 2 );?>《<?php echo ($video["title"]); ?>》,<?php endforeach; endif; else: echo "" ;endif;unset($__LIST__);unset($tag);?><?php endif; ?><?php if($pid == 2): ?><?php $tag['name'] = 'video';$tag['cid'] = '2';$tag['limit'] = '10';$tag['order'] = 'dayhits desc'; $__LIST__ = get_tag_gxcms($tag); if(is_array($__LIST__)): $i = 0;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$video): ++$i;$mod = ($i % 2 );?>《<?php echo ($video["title"]); ?>》,<?php endforeach; endif; else: echo "" ;endif;unset($__LIST__);unset($tag);?><?php endif; ?><?php if($pid == 3): ?><?php $tag['name'] = 'video';$tag['cid'] = '3';$tag['limit'] = '10';$tag['order'] = 'dayhits desc'; $__LIST__ = get_tag_gxcms($tag); if(is_array($__LIST__)): $i = 0;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$video): ++$i;$mod = ($i % 2 );?>《<?php echo ($video["title"]); ?>》,<?php endforeach; endif; else: echo "" ;endif;unset($__LIST__);unset($tag);?><?php endif; ?><?php if($pid == 4): ?><?php $tag['name'] = 'video';$tag['cid'] = '4';$tag['limit'] = '10';$tag['order'] = 'dayhits desc'; $__LIST__ = get_tag_gxcms($tag); if(is_array($__LIST__)): $i = 0;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$video): ++$i;$mod = ($i % 2 );?>《<?php echo ($video["title"]); ?>》,<?php endforeach; endif; else: echo "" ;endif;unset($__LIST__);unset($tag);?><?php endif; ?>最新<?php echo (get_channel_name(get_pid($cid))); ?>,<?php echo ($cname); ?>在线观看,<?php echo ($webname); ?>">
<meta name="description" content="最新<?php echo ($cname); ?>,<?php if($pid == 1): ?><?php $tag['name'] = 'video';$tag['cid'] = '1';$tag['limit'] = '10';$tag['order'] = 'dayhits desc'; $__LIST__ = get_tag_gxcms($tag); if(is_array($__LIST__)): $i = 0;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$video): ++$i;$mod = ($i % 2 );?>《<?php echo ($video["title"]); ?>》,<?php endforeach; endif; else: echo "" ;endif;unset($__LIST__);unset($tag);?><?php endif; ?><?php if($pid == 2): ?><?php $tag['name'] = 'video';$tag['cid'] = '2';$tag['limit'] = '10';$tag['order'] = 'dayhits desc'; $__LIST__ = get_tag_gxcms($tag); if(is_array($__LIST__)): $i = 0;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$video): ++$i;$mod = ($i % 2 );?>《<?php echo ($video["title"]); ?>》,<?php endforeach; endif; else: echo "" ;endif;unset($__LIST__);unset($tag);?><?php endif; ?><?php if($pid == 3): ?><?php $tag['name'] = 'video';$tag['cid'] = '3';$tag['limit'] = '10';$tag['order'] = 'dayhits desc'; $__LIST__ = get_tag_gxcms($tag); if(is_array($__LIST__)): $i = 0;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$video): ++$i;$mod = ($i % 2 );?>《<?php echo ($video["title"]); ?>》,<?php endforeach; endif; else: echo "" ;endif;unset($__LIST__);unset($tag);?><?php endif; ?><?php if($pid == 4): ?><?php $tag['name'] = 'video';$tag['cid'] = '4';$tag['limit'] = '10';$tag['order'] = 'dayhits desc'; $__LIST__ = get_tag_gxcms($tag); if(is_array($__LIST__)): $i = 0;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$video): ++$i;$mod = ($i % 2 );?>《<?php echo ($video["title"]); ?>》,<?php endforeach; endif; else: echo "" ;endif;unset($__LIST__);unset($tag);?><?php endif; ?>最新<?php echo (get_channel_name(get_pid($cid))); ?>,<?php echo ($cname); ?>在线观看,<?php echo ($webname); ?>">
<link rel='stylesheet' type='text/css' href='<?php echo ($webpath); ?>css/header.css'>
<link rel='stylesheet' type='text/css' href='<?php echo ($webpath); ?>css/list.css'>
<script type="text/javascript" src="<?php echo ($webpath); ?>js/common.js"></script>
</head>
<body>
<div id="wrapper">
<div class="header">
	<h1 class="header_logo"><a href="<?php echo ($webpath); ?>" title="<?php echo ($webname); ?>" target="_self"><?php echo ($webname); ?></a></h1>
	<script type="text/javascript" src="<?php echo ($webpath); ?>js/search_content_utf8.js"></script>
	<div class="searchbox">
	<form method="post" action="<?php echo ($webpath); ?>index.php?s=video/search" onsubmit="return check();" style="z-index: -1;" name="search" id="search" target="_blank">
		<fieldset class="searchbox_search">
			<input id="wd" name="wd" onfocus="serchClick('wd')" autocomplete="off" value="<?php echo (($keyword)?($keyword):'请输入视频名、主演或导演'); ?>" maxlength="26" type="text" class="input"/>
			<button type="submit" id="btnSearch" onclick="stopSearchTextTimer();">Search</button>
		</fieldset>
	</form>
	<script>
	function serchClick(name)
	{
		var box=document.getElementById(name);
		if(searchTextTimer!=null||box.value=='请输入视频名、主演或导演')
		{box.value=''};
		stopSearchTextTimer();
		box.style.color='#000';
	}
	setSearchInputContent(document.getElementById("wd"));
	</script>
		<div class="searchbox_hottag">
			<a href="<?php echo ($webpath); ?>index.php">Hot play</a><?php echo ($hotkey); ?>
		</div>
	</div><!--searchbox  END-->
	<div class="userpanel_box">
		<div class="dy_top_box"><?php echo get_cms_ads('detail_txt');?></div>
		<div class="userpanel"><!--header shoucang <a href="javascript:void(0)" id="fav">收藏本站</a>|END--><a href="<?php echo ($guestbookurl); ?>" target="_blank">Advice</a></div>
	</div>
	<div class="quickpanel" id="quickpanel"></div>
</div><!--header 头部结束 END-->
<div class="mainnav">
	<div class="mainnav_list">
    <a href="<?php echo ($webpath); ?>" <?php if($model == 'index'): ?>class="on"<?php endif; ?>>Home</a>
	<!--
    <?php $tag['name'] = 'menu'; $__LIST__ = get_tag_gxmenu($tag); if(is_array($__LIST__)): $i = 0;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): ++$i;$mod = ($i % 2 );?><a onfocus="this.blur();" href="<?php echo ($menu["showurl"]); ?>" <?php if(($menu['id'] == $cid) or ($menu['id'] == $pid)): ?>class="on"<?php endif; ?>><?php echo ($menu["cname"]); ?></a><?php endforeach; endif; else: echo "" ;endif;unset($__LIST__);unset($tag);?>
	END-->
	<!--header 头部结束
    <a href="<?php echo ($topurl); ?>" <?php if($model == 'top10'): ?>class="on"<?php endif; ?>>Rank</a>
    <a href="<?php echo ($specialurl); ?>" <?php if($model == 'special'): ?>class="on"<?php endif; ?>>Special</a>
	 END-->
	</div>
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
	<!--histroydrop  
		<a href="javascript://" title="" class="dropbox_tigger" id="Tab_top_0" onmouseover="showTop(0);" onmouseout="hideTop();" target="_self" >百度影音<b></b></a>
		<div class="histroydrop" style="display:none;" id="List_top_0" onmouseover="showTop(0);" onmouseout="hideTop();">
		<div class="histroydrop_tt"><a href="javascript://" title="关闭" class="red" onclick="hideTop();" target="_self">关闭</a></div>
		<div class="softbox"><dl class="softbox_dl">
		<dt>百度影音播放器</dt>
		<dd id="baidu_download_url3"><a href="/player_down.php">本地下载</a></dd>
		<dd class="cutline">|</dd><dd id="baidu_download_url"><a href="http://www.skycn.com/soft/65257.html">天空下载</a></dd>
		<dd class="cutline">|</dd><dd id="baidu_download_url2"><a href="http://dl.pconline.com.cn/download/65022.html#ad=6575">PConline</a></dd>
		</dl></div>
		</div>
	</div>END-->

	<div class="dropbox dropbox_2">
	<!--histroydrop  
		<a href="javascript://" title="" class="dropbox_tigger" id="Tab_top_1" onmouseover="showTop(1);" onmouseout="hideTop();" target="_self">我看过的<b></b></a>
		<div class="histroydrop" style="display:none;" id="List_top_1" onmouseover="showTop(1);" onmouseout="hideTop();">
		<div class="histroydrop_tt"><a href="javascript://" onclick="delCookie('gxhis');" target="_self" title="清空观看记录">清空观看记录</a>|<a href="javascript://" title="关闭" class="red" onclick="hideTop();" target="_self">关闭</a></div>
		<div class="histroydrop_con"><div id="view_history" class="view_history" style="display:;" target="_self"><center>您的观看历史为空。</center></div></div>
		</div><!--histroydrop  END-->
	</div>
</div><!--mainnav 导航结束 END-->
<div id="movie_info" style="display:none"></div>
<div class="wrapper R710L250">
<div class="navigation">
  <span>您现在所在的位置：</span><?php echo ($navtitle); ?>
</div>
<div class="main">
		<div class="box box_tag">
			<div class="box_tt"><h2><?php echo (get_channel_name(get_pid($cid))); ?>索引</h2>
				<a id="a_reset_critirea" href="<?php echo ($webpath); ?>index.php?s=video/lists/reset/1/id/<?php echo (get_pid($cid)); ?>.html" title="" class="act">重置筛选</a>
			</div>
			<div class="box_con">				
				<dl class="searchtag">
					<dt>检索条件:</dt><dd class="searchtag_tips">共有<span><?php echo ($count); ?></span>个符合条件的视频</dd>
				</dl>
				<div id="all_critirea_issue">
                
				<dl class="taglist"><dt>按类型</dt>
					<dd id="div_genre"><a href="<?php echo ($webpath); ?>index.php?s=video/lists/reset/1/id/<?php echo (get_pid($cid)); ?>" <?php if($cid == get_pid($cid)): ?>class="on"<?php endif; ?>>全部</a><?php if(($pid)  >  "0"): ?><?php $tag['name'] = 'menu';$tag['ids'] = ''.$pid.''; $__LIST__ = get_tag_gxmenu($tag); if(is_array($__LIST__)): $i = 0;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): ++$i;$mod = ($i % 2 );?><?php if(is_array($menu["son"])): $i = 0; $__LIST__ = $menu["son"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menuson): ++$i;$mod = ($i % 2 )?><a href="<?php echo ($menuson["showurl"]); ?>" <?php if(($cid)  ==  $menuson["id"]): ?>class="on"<?php endif; ?>><?php echo ($menuson["cname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif;unset($__LIST__);unset($tag);?><?php else: ?><?php $tag['name'] = 'menu';$tag['ids'] = ''.$cid.''; $__LIST__ = get_tag_gxmenu($tag); if(is_array($__LIST__)): $i = 0;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): ++$i;$mod = ($i % 2 );?><?php if(is_array($menu["son"])): $i = 0; $__LIST__ = $menu["son"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menuson): ++$i;$mod = ($i % 2 )?><a href="<?php echo ($menuson["showurl"]); ?>" <?php if(($cid)  ==  $menuson["id"]): ?>class="on"<?php endif; ?>><?php echo ($menuson["cname"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif;unset($__LIST__);unset($tag);?><?php endif; ?></dd>
				</dl>
                
				<dl class="taglist"><dt>按地区</dt>
					<dd id="div_area"><a href="<?php echo ($webpath); ?>index.php?s=video/lists/reset/1/area/<?php echo ($area); ?>" id="areaall">全部</a><span id="areahtml"><?php echo ($area); ?></span></dd>
				</dl>
				<dl class="taglist"><dt>按年份</dt>
					<dd id="div_year"><a href="<?php echo ($webpath); ?>index.php?s=video/lists/reset/1/year/<?php echo ($year); ?>" id="yearall">全部</a><span id="yearhtml"><?php echo ($year); ?></span></dd>
				</dl>
				<dl class="taglist"><dt>按拼音</dt>
					<dd id="div_fordown"><a href="<?php echo ($webpath); ?>index.php?s=video/lists/reset/1/id/<?php echo ($cid); ?>" <?php if($letter == null): ?>class="on"<?php endif; ?>>全部</a> <?php echo get_letter_url($cid,$letter,'video','','');?></dd>
				</dl>
								</div>
				<div class="tagtigger">
					<span id="btn_critea_area" onclick="show_critea_area();">收起全部</span>
				</div>
			</div>
		</div>
		<div class="box">
			<div class="box_tt box_tt_tab">
				<strong>排序方式</strong><h3 <?php if($order == 'weekhits'): ?>class="on"<?php endif; ?>><a href="<?php echo ($webpath); ?>index.php?s=video/lists/reset/1/id/<?php echo ($cid); ?>/order/weekhits">热门</a></h3><h3 <?php if(($order == 'addtime') or ($order == null)): ?>class="on"<?php endif; ?>><a href="<?php echo ($webpath); ?>index.php?s=video/lists/reset/1/id/<?php echo ($cid); ?>/order/addtime">更新</a></h3><h3 <?php if($order == 'score'): ?>class="on"<?php endif; ?>><a href="<?php echo ($webpath); ?>index.php?s=video/lists/reset/1/id/<?php echo ($cid); ?>/order/score">评分</a></h3>
			</div>
	<div class="box_con">
		<ul class="movielist">
            <?php $tag['name'] = 'video';$tag['cid'] = ''.$cid.'';$tag['limit'] = '20';$tag['order'] = ''.$order.''; $__LIST__ = get_tag_gxlist($tag); if(is_array($__LIST__)): $i = 0;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$video): ++$i;$mod = ($i % 2 );?><li><a href="<?php echo ($video["readurl"]); ?>" title="<?php echo ($video["title"]); ?>" target="_blank" class="pic"><img id="img_<?php echo ($video["id"]); ?>" onclick="set_view_record('id=<?php echo ($video["id"]); ?>|<?php echo ($video["title"]); ?>|<?php echo ($video["readurl"]); ?>|<?php echo ($video["picurl-s"]); ?>|<?php echo ($video["year"]); ?>|<?php echo ($video["score"]); ?>|<?php echo ($video["showname"]); ?>|<?php echo ($video["playerurl"]); ?>');" onmouseover="show_movie_info('img_<?php echo ($video["id"]); ?>','teleplay','<?php echo ($video["title"]); ?>','<?php echo ($video["score"]); ?>','<?php echo ($video["scoreer"]); ?>','<?php echo ($video["area"]); ?>&nbsp;','<?php echo ($video["showname"]); ?>','<?php echo (get_replace_html($video["actor"],0,12)); ?>','<?php echo (($video["$director"])?($video["$director"]):未知); ?>','<?php echo ($video["year"]); ?>','<?php echo ($video["hits"]); ?>','');" onmouseout="hide_movie_info();" _src="<?php echo ($video["picurl-s"]); ?>" src="<?php echo ($webpath); ?>images/img_default.gif" alt="<?php echo ($video["title"]); ?>" title="<?php echo ($video["title"]); ?>" /><?php echo ($video["title"]); ?><?php if(($video["intro"] == 'DVD+BD') or ($video["intro"] == 'BD')): ?><span class="movnum movnum_1080"></span><?php endif; ?><?php if(($video["intro"] == 'HD')): ?><span class="movnum movnum_720"></span><?php endif; ?><?php if(($video["intro"] == 'dvd')): ?><span class="movnum movnum_480"></span><?php endif; ?><span class="movbg"></span><span class="movtxt"><?php if($video["serial"] > 0): ?>更新至<?php echo ($video["serial"]); ?>集<?php else: ?><?php endif; ?><?php if($video["serial"] == 0): ?><?php echo (($video["intro"])?($video["intro"]):完结); ?><?php else: ?><?php endif; ?></span></a><p class="title"><a title="<?php echo ($video["title"]); ?>" onclick="set_view_record('id=<?php echo ($video["id"]); ?>|<?php echo ($video["title"]); ?>|<?php echo ($video["readurl"]); ?>|<?php echo ($video["picurl"]); ?>|<?php echo ($video["year"]); ?>|<?php echo ($video["score"]); ?>|<?php echo ($video["showname"]); ?>|<?php echo ($video["playerurl"]); ?>');" target="_blank" href="<?php echo ($video["readurl"]); ?>"><?php echo (get_replace_html($video["title"],0,12)); ?></a><a class="info" target="_blank" title="查看详情" onclick="set_view_record('id=<?php echo ($video["id"]); ?>|<?php echo ($video["title"]); ?>|<?php echo ($video["readurl"]); ?>|<?php echo ($video["picurl"]); ?>|<?php echo ($video["year"]); ?>|<?php echo ($video["score"]); ?>|<?php echo ($video["showname"]); ?>|<?php echo ($video["playerurl"]); ?>');" href="<?php echo ($video["readurl"]); ?>">查看详情</a></p><p><?php echo (get_replace_html($video["actor"],0,10)); ?></p><p>评价:<strong><?php echo ($video["score"]); ?></strong><em>(<?php echo ($video["scoreer"]); ?>评)</em></p>
						<div class="operbox"><a class="on" href="<?php echo ($video["playerurl"]); ?>" onclick="set_view_record('id=<?php echo ($video["id"]); ?>|<?php echo ($video["title"]); ?>|<?php echo ($video["readurl"]); ?>|<?php echo ($video["picurl"]); ?>|<?php echo ($video["year"]); ?>|<?php echo ($video["score"]); ?>|<?php echo ($video["showname"]); ?>|<?php echo ($video["playerurl"]); ?>');" title="<?php echo ($video["title"]); ?>" target="_blank">播放</a>
						<a id="cl_mid_<?php echo ($video["id"]); ?>" title="收藏" href="javascript:void(0);" >收藏</a>
						</div>
			</li><?php endforeach; endif; else: echo "" ;endif;unset($__LIST__);unset($tag);?>
		</ul>
				<?php if(($count)  >  "20"): ?><p class="list-pager"><?php echo ($pages); ?></p><?php endif; ?>
	</div>
		</div><!--box  END-->
	</div><!--main  END-->
	<div id="all_channel_page_side" class="side">
				<div class="box box_submenu">
			<div class="box_tt"><h2>分类索引</h2></div>
			<div class="box_con">
				<ul class="submenu"><?php $tag['name'] = 'menu'; $__LIST__ = get_tag_gxmenu($tag); if(is_array($__LIST__)): $i = 0;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$menu): ++$i;$mod = ($i % 2 );?><?php if(($menu["mid"])  ==  "1"): ?><li><a href="<?php echo ($menu["showurl"]); ?>" title="<?php echo ($menu["cname"]); ?>" <?php if(($menu['id'] == $cid) or ($menu['id'] == $pid)): ?>class="on"<?php endif; ?>><?php echo ($menu["cname"]); ?></a></li><?php endif; ?><?php endforeach; endif; else: echo "" ;endif;unset($__LIST__);unset($tag);?>
                </ul>
			</div>
		</div>
				<div class="box">
			<div class="box_tt"><h2>最新热播榜</h2></div>
			<div class="box_con">
				<div class="tabbox">
						<a id="Tab_rebo_0" <?php if(($pid == 1) or ($cid == 1)): ?>class="on"<?php endif; ?> onmouseover="switchTab('rebo',0,4,'on','');">电影</a>
						<a id="Tab_rebo_1" <?php if(($pid == 2) or ($cid == 2)): ?>class="on"<?php endif; ?>onmouseover="switchTab('rebo',1,4,'on','');">电视剧</a>
						<a id="Tab_rebo_2" <?php if($cid == 3): ?>class="on"<?php endif; ?> onmouseover="switchTab('rebo',2,4,'on','');">动漫</a>
						<a id="Tab_rebo_3" <?php if($cid == 4): ?>class="on"<?php endif; ?> onmouseover="switchTab('rebo',3,4,'on','');">综艺</a>
				</div>				
				<div id="List_rebo_0" <?php if(($pid != 1) and ($cid != 1)): ?>style="display:none;"<?php endif; ?>>				
					<ol class="ranklist ranklist_dsj">
                    	<?php $tag['name'] = 'video';$tag['cid'] = '1';$tag['limit'] = '10';$tag['order'] = 'dayhits desc'; $__LIST__ = get_tag_gxcms($tag); if(is_array($__LIST__)): $i = 0;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$video): ++$i;$mod = ($i % 2 );?><?php if(($i)  <  "4"): ?><li class="top"><?php else: ?><li><?php endif; ?><em><?php if(($i)  ==  "10"): ?><?php echo ($i); ?><?php else: ?>0<?php echo ($i); ?><?php endif; ?></em><p><a href="<?php echo ($video["readurl"]); ?>" title="<?php echo ($video["title"]); ?>" target="_blank"><?php echo ($video["title"]); ?></a><strong class="type"><?php if($video["serial"] > 0): ?>更新至<?php echo ($video["serial"]); ?>集<?php else: ?><?php if(!empty($video["intro"])): ?><?php echo (get_replace_html($video["intro"],0,8)); ?><?php else: ?>高清<?php endif; ?><?php endif; ?></strong></p><span class="score"><?php echo ($video["score"]); ?></span><a href="<?php echo ($video["readurl"]); ?>" title="点击查看影片信息" class="info" target="_blank">影片信息</a></li><?php endforeach; endif; else: echo "" ;endif;unset($__LIST__);unset($tag);?>
					</ol>
				</div>
				<div id="List_rebo_1" <?php if(($pid != 2) and ($cid != 2)): ?>style="display:none;"<?php endif; ?>>
					<ol class="ranklist ranklist_dsj">
						<?php $tag['name'] = 'video';$tag['cid'] = '2';$tag['limit'] = '10';$tag['order'] = 'dayhits desc'; $__LIST__ = get_tag_gxcms($tag); if(is_array($__LIST__)): $i = 0;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$video): ++$i;$mod = ($i % 2 );?><?php if(($i)  <  "4"): ?><li class="top"><?php else: ?><li><?php endif; ?><em><?php if(($i)  ==  "10"): ?><?php echo ($i); ?><?php else: ?>0<?php echo ($i); ?><?php endif; ?></em><p><a href="<?php echo ($video["readurl"]); ?>" title="<?php echo ($video["title"]); ?>" target="_blank"><?php echo ($video["title"]); ?></a><strong class="type"><?php if($video["serial"] > 0): ?>更新至<?php echo ($video["serial"]); ?>集<?php else: ?><?php if(!empty($video["intro"])): ?><?php echo (get_replace_html($video["intro"],0,8)); ?><?php else: ?>完结<?php endif; ?><?php endif; ?></strong></p><span class="score"><?php echo ($video["score"]); ?></span><a href="<?php echo ($video["readurl"]); ?>" title="点击查看影片信息" class="info" target="_blank">影片信息</a></li><?php endforeach; endif; else: echo "" ;endif;unset($__LIST__);unset($tag);?>
					</ol>
				</div>
				<div id="List_rebo_2" <?php if($cid != 3): ?>style="display:none;"<?php endif; ?>>
					<ol class="ranklist ranklist_dsj">
						<?php $tag['name'] = 'video';$tag['cid'] = '3';$tag['limit'] = '10';$tag['order'] = 'dayhits desc'; $__LIST__ = get_tag_gxcms($tag); if(is_array($__LIST__)): $i = 0;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$video): ++$i;$mod = ($i % 2 );?><?php if(($i)  <  "4"): ?><li class="top"><?php else: ?><li><?php endif; ?><em><?php if(($i)  ==  "10"): ?><?php echo ($i); ?><?php else: ?>0<?php echo ($i); ?><?php endif; ?></em><p><a href="<?php echo ($video["readurl"]); ?>" title="<?php echo ($video["title"]); ?>" target="_blank"><?php echo ($video["title"]); ?></a><strong class="type"><?php if($video["serial"] > 0): ?>更新至<?php echo ($video["serial"]); ?>集<?php else: ?><?php if(!empty($video["intro"])): ?><?php echo (get_replace_html($video["intro"],0,8)); ?><?php else: ?>完结<?php endif; ?><?php endif; ?></strong></p><span class="score"><?php echo ($video["score"]); ?></span><a href="<?php echo ($video["readurl"]); ?>" title="点击查看影片信息" class="info" target="_blank">影片信息</a></li><?php endforeach; endif; else: echo "" ;endif;unset($__LIST__);unset($tag);?>
					</ol>
				</div>
				<div id="List_rebo_3" <?php if($cid != 4): ?>style="display:none;"<?php endif; ?>>
					<ol class="ranklist ranklist_dsj">
						<?php $tag['name'] = 'video';$tag['cid'] = '4';$tag['limit'] = '10';$tag['order'] = 'dayhits desc'; $__LIST__ = get_tag_gxcms($tag); if(is_array($__LIST__)): $i = 0;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$video): ++$i;$mod = ($i % 2 );?><?php if(($i)  <  "4"): ?><li class="top"><?php else: ?><li><?php endif; ?><em><?php if(($i)  ==  "10"): ?><?php echo ($i); ?><?php else: ?>0<?php echo ($i); ?><?php endif; ?></em><p><a href="<?php echo ($video["readurl"]); ?>" title="<?php echo ($video["title"]); ?>" target="_blank"><?php echo ($video["title"]); ?></a><strong class="type"><?php if($video["serial"] > 0): ?><?php echo ($video["serial"]); ?>期<?php else: ?><?php if(!empty($video["intro"])): ?><?php echo (get_replace_html($video["intro"],0,8)); ?><?php else: ?>完结<?php endif; ?><?php endif; ?></strong></p><span class="score"><?php echo ($video["score"]); ?></span><a href="<?php echo ($video["readurl"]); ?>" title="点击查看影片信息" class="info" target="_blank">影片信息</a></li><?php endforeach; endif; else: echo "" ;endif;unset($__LIST__);unset($tag);?>
					</ol>
				</div>
			</div>			
		</div>
		<div class="box box_history">
	<div class="box_tt"><h2>您的浏览记录</h2><a class="act" onclick="clear_movies_viewed();this.blur();"title="清空" href="javascript:void(0);">清空</a></div>
	<div class="box_con">
		<ul class="historylist" id="channel_historylist"><p style="text-align:center;">暂无浏览记录！</p></ul>
	</div>
	<script>__init_view_record();</script>
</div>
</div>
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
</body>
</html>
<script language="javascript">var SitePath='<?php echo ($webpath); ?>';var SiteMid='<?php echo ($mid); ?>';var SiteCid='<?php echo ($cid); ?>';var SitePid='<?php echo ($pid); ?>';var SiteId='<?php echo ($id); ?>';</script>
<script language="JavaScript" type="text/javascript" src="<?php echo ($webpath); ?>views/js/jquery.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo ($webpath); ?>views/js/system.js"></script>
<script language="JavaScript" type="text/javascript" src="<?php echo ($webpath); ?>views/js/history.js"></script>
<script src="<?php echo ($webpath); ?>js/lazy.js" charset="utf-8" ></script>
<script type="text/javascript">LAZY.init();LAZY.run();</script>
<script type="text/javascript" src="<?php echo ($webpath); ?>js/videolist.js"></script>
<script src="<?php echo ($webpath); ?>js/tips_history_lazy.min.js" charset="utf-8" ></script>