<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>幻灯管理</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='./views/css/admin_style.css'>
<script language="JavaScript" charset="utf-8" type="text/javascript" src="./views/js/jquery.js"></script>
<style>input{ height:25px;line-height:20px};</style>
</head>
<body>
<table width="98%" border="0" cellpadding="4" cellspacing="1" class="table">
<?php if(($id)  >  "0"): ?><form id="gxform" name="update" action="?s=Admin/Slide/Update" method="post">
<input type="hidden" name="id" value="<?php echo ($id); ?>">
<?php else: ?>
<form id="gxform" action="?s=Admin/Slide/Insert" method="post" name="gxform"><?php endif; ?>
<tr class="table_title">
  <td colspan="2"><?php echo ($tpltitle); ?>首页幻灯</td>
</tr>      
<tr class="tr">
  <td width="100" class="rt">幻灯名称：</td>
  <td><input name="title" type="text" maxlength="50" value="<?php echo ($title); ?>" style="width:300px"> *</td>
</tr>
 <tr class="tr">
  <td class="rt">链接地址：</td>
  <td ><input name="link" type="text" value="<?php echo ($link); ?>" maxlength="100" style="width:300px"> *</td>
</tr>
<tr class="tr">
  <td class="rt">幻灯图片：</td>
  <td ><div style="float:left"><input name="picurl" id="picurl" type="text" value="<?php echo ($picurl); ?>" maxlength="100" style="width:300px"></div> <div style="float:left; margin-left:10px;"><iframe src="?s=Admin/Upload/Show/mid/slide" scrolling="no" topmargin="0" width="350" height="28" marginwidth="0" marginheight="0" frameborder="0" align="left"></iframe></div></td>
</tr> 
<tr class="tr">
  <td class="rt">幻灯缩略图：</td>
  <td ><div style="float:left"><input name="picurls" id="picurls" type="text" value="<?php echo ($picurls); ?>" maxlength="100" style="width:300px"></div> <div style="float:left; margin-left:10px;"><iframe src="?s=Admin/Upload/Show/mid/slides" scrolling="no" topmargin="0" width="350" height="28" marginwidth="0" marginheight="0" frameborder="0" align="left"></iframe></div></td>
</tr>  
<tr class="tr">
  <td class="rt">幻灯简介：</td>
  <td ><textarea name="content" style="width:300px;height:100px"><?php echo ($content); ?></textarea></td>
</tr>  
<tr class="tr">
  <td class="rt">幻灯排序：</td>
  <td ><input name="oid" type="text" value="<?php echo ($oid); ?>" maxlength="2" style="width:45px;height:18px;line-height:18px;text-align:center" title="越小越前面"></td>
</tr>
<tr class="tr">
<td class="rt">幻灯状态：</td>
<td ><select name="status"><option value="1" >显示</option><option value="0" <?php if(($status)  ==  "0"): ?>selected<?php endif; ?>>隐藏</option></select></td>
</tr>
<tr class="tr">
  <td colspan="2"><input class="bginput" type="submit" name="submit" value="提交"></td>
</tr>
</form>
</table>
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