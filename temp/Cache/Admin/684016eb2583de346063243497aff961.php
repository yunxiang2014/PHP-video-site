<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>网站信息设置</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='./views/css/admin_style.css'>
<script language="JavaScript" charset="utf-8" type="text/javascript" src="./views/js/jquery.js"></script>
<style type="text/css">
<!--
.red{color:#f03;}
-->
</style>
</head>
<body>
<table width="98%" border="0" cellpadding="4" cellspacing="1" class="table">
<form action="?s=Admin/Config/Updateweb"  method="post" id="gxform">
<tr class="table_title"><td colspan="2">网站信息设置</td></tr>
<tr class="ji">
  <td class="left">网站名称</td>
  <td><input type="text" name="con[web_name]" size="35" maxlength="50" value="<?php echo ($web_name); ?>"> *</td>
</tr>
<tr class="tr">
  <td class="left">网站域名</td>
  <td ><input type="text" name="con[web_url]" size="35" maxlength="50" value="<?php echo ($web_url); ?>" title="系统所安装的地址,结尾必须加斜杠 '/'"> *
  </td>
</tr>
<tr class="ji">
  <td class="left">安装路径</td>
  <td><input type="text" name="con[web_path]" size="35" maxlength="50" value="<?php echo ($web_path); ?>" title="结尾必须加斜杠 '/', 根目录请填写'/'"> *
  </td>
</tr>
<tr class="tr">
  <td class="left">站长Email</td>
  <td><input type="text" name="con[web_email]" size="35" value="<?php echo ($web_email); ?>">
  </td>
</tr>
 <tr class="tr">
  <td class="left">站长QQ</td>
  <td><input type="text" name="con[web_qq]" size="35" value="<?php echo ($web_qq); ?>">
  </td>
</tr>
 <tr class="ji">
  <td class="left">ICP备案信息</td>
  <td><input type="text" name="con[web_icp]" size="35" value="<?php echo ($web_icp); ?>"></td>
</tr>
<tr class="tr">
  <td class="left">热门关键词</td>
  <td><input name="con[web_hotkey]"  type="text" value="<?php echo ($web_hotkey); ?>" style="width:495px" maxlength="255" title="关键司以 | 线分隔">
  </td>
</tr>
<tr class="tr">
  <td class="left">轮播关键词</td>
  <td><input name="con[web_indexkey]"  type="text" value="<?php echo ($web_indexkey); ?>" style="width:495px" maxlength="255" title="关键司以 | 线分隔">
  </td>
</tr>
<tr class="tr">
  <td class="left">SEO关键字描述</td>
  <td><input name="con[web_keywords]"  type="text" value="<?php echo ($web_keywords); ?>" style="width:495px" maxlength="255">
  </td>
</tr>
<tr class="ji">
  <td class="left">SEO网页内容信息描述</td>
  <td><input name="con[web_description]" type="text" value="<?php echo ($web_description); ?>" style="width:495px" maxlength="255">
  </td>
</tr>          
<tr class="tr">
  <td class="left">版权信息</td>
  <td title="设置本网站相关版权信息">
    <textarea name="con[web_copyright]" style="width:500px;height:50px"><?php echo ($web_copyright); ?></textarea> <br>
  </td>
</tr> 
 <tr class="ji">
  <td class="left">第三方统计代码</td>
  <td>
    <textarea name="con[web_tongji]" style="width:500px; height:50px"><?php echo ($web_tongji); ?></textarea> <br>
  </td>
</tr> 
<tr class="tr">
  <td class="left">模板主题方案</td>
  <td><select name="con[default_theme]"><?php if(is_array($temp)): $i = 0; $__LIST__ = $temp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gxcms): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($gxcms["filename"]); ?>" <?php if(($gxcms["filename"])  ==  $default_theme): ?>selected<?php endif; ?>><?php echo ($gxcms["filename"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?></select> 
  </td>
</tr>
<tr class="table_title"><td colspan="2">个性参数设置</td></tr>   
<tr class="tr"> 
<td class="left">影视简介伪原创</td>
<td><select name="con[web_admin_yswyc]"><option value=1>开启</option><option value=0 <?php if(($web_admin_yswyc)  ==  "0"): ?>selected<?php endif; ?>>关闭</option></select> 开启后影视介绍内容将经过伪原创加工</td>
</tr>
<tr class="tr"> 
<td class="left">资讯内容伪原创</td>
<td><select name="con[web_admin_zxwyc]"><option value=1>开启</option><option value=0 <?php if(($web_admin_zxwyc)  ==  "0"): ?>selected<?php endif; ?>>关闭</option></select> 开启后资讯内容将经过伪原创加工</td>
</tr> 
<tr class="tr"> 
<td class="left">编辑数据更新时间</td>
<td><select name="con[web_admin_edittime]"><option value=1>开启</option><option value=0 <?php if(($web_admin_edittime)  ==  "0"): ?>selected<?php endif; ?>>关闭</option></select> 开启则在后台编辑数据的时候默认勾上更新时间选项</td>
</tr> 
<tr class="ji">
<td class="left">数据管理排序方式</td>
<td><select name="con[web_admin_ordertype]"><option value="addtime">时间</option><option value="id" <?php if(($web_admin_ordertype)  ==  "id"): ?>selected<?php endif; ?>>ID值</option></select> 后台数据管理的默认排序字段(倒序方式)</td>
</tr>
<tr class="ji">
  <td class="left">后台分页显示条数</td>
  <td><input type="text" name="con[web_admin_pagenum]" size="5" maxlength="5" value="<?php echo ($web_admin_pagenum); ?>" style="text-align:center"> 后台数据管理的每页默认显示条数
  </td>
</tr>
<tr class="ji">
  <td class="left">前台翻页信息最大值</td>
  <td><input type="text" name="con[web_home_pagenum]" size="5" maxlength="5" value="<?php echo ($web_home_pagenum); ?>" style="text-align:center"> 前台网站翻页信息左右显示的最大条数
  </td>
</tr>    
<tr class="tr">
  <td class="left">人气随机最大值</td>
  <td><input type="text" name="con[web_admin_hits]" size="5" maxlength="5" value="<?php echo ($web_admin_hits); ?>" style="text-align:center"> 采集电影时随机生成的最大人气值
  </td>
</tr>
<tr class="tr red">
  <td class="left">人气统计方式</td>
  <td>
  <select  id='hits_way' name="con[web_hits_way]" onchange="javascript:Wayswitch();"><option value=0 >普通方式</option><option  value=1 <?php if(($web_hits_way)  ==  "1"): ?>selected<?php endif; ?>>高级方式</option></select>
   访问量较大时采用 '高级方式',以缓解数据库压力。<span id='timeset' <?php if(($web_hits_way)  ==  "0"): ?>style='display:none;'<?php endif; ?>>设置延迟更新时长为<input type="text" name="con[web_hits_time]" size="2" maxlength="2" value="<?php echo ($web_hits_time); ?>" style="text-align:center">s</span>
  </td>
</tr>
<tr class="tr">
  <td class="left">顶踩随机最大值</td>
  <td><input type="text" name="con[web_admin_updown]" size="5" maxlength="5" value="<?php echo ($web_admin_updown); ?>" style="text-align:center"> 采集电影时随机生成的顶踩值
  </td>
</tr>
 <tr class="tr">
  <td class="left">评分随机最大值</td>
  <td><input type="text" name="con[web_admin_score]" size="5" maxlength="1" value="<?php echo ($web_admin_score); ?>" style="text-align:center"> 采集电影时随机生成的评分值,请输入(1-9)
  </td>
</tr>
<tr class="tr">
  <td class="left">影片相似检测长度差值</td>
  <td><input type="text" name="con[web_collect_num]" size="5" maxlength="1" value="<?php echo ($web_collect_num); ?>" style="text-align:center"> 根据该差值计算出来的影片标题如果存在则设为相似影片(推荐设为2，0为不使用该功能，征对不同资源站)
  </td>
</tr>
 <tr class="tr">
  <td class="left">广告保存目录</td>
  <td><input type="text" name="con[web_adsensepath]" size="20" maxlength="30" value="<?php echo ($web_adsensepath); ?>" style="text-align:center"> *广告JS文件保存路径(区分大小写,相对于安装目录)
  </td>
</tr>       
<tr class="ji">
  <td class="left">影片发行语言设置</td>
  <td><input type="text" name="con[web_admin_language]" size="70" maxlength="100" value="<?php echo ($web_admin_language); ?>"> 以半角逗号分开
  </td>
</tr>
<tr class="ji">
  <td class="left">影片发行地区设置</td>
  <td><input type="text" name="con[web_admin_area]" size="70" maxlength="100" value="<?php echo ($web_admin_area); ?>"> 以半角逗号分开
  </td>
</tr>       
<tr class="tr">
  <td colspan="2"><input type="hidden" name="setting_sub" value="true">
    <input class="bginput" type="submit" name="submit" value="提交">
    <input class="bginput" type="reset" name="Input" value="重置" >
  </td>
</tr>
</form>
</table>
<script type="text/javascript">
<!--
function  Wayswitch(){
	var way=$('#hits_way').val();
	if(way=='0'){
	  $('#timeset').hide();
	}else{
	  $('#timeset').show();
	}
}
-->
</script>
<style>
#footer, #footer a:link, #footer a:visited {
	clear:both;
	color:#0072e3;
	font:12px/1.5 Arial;
	margin-top:10px;
	text-align:center;
	white-space:nowrap;
}
</style>
<div id="footer">程序版本：<?php echo C("cms_var");?>&nbsp;&nbsp;&nbsp;&nbsp;Copyright © 2010-2011 All rights reserved</div>
</body>
</html>