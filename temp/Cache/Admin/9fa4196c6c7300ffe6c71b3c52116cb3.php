<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>高级SQL语句</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel='stylesheet' type='text/css' href='./views/css/admin_style.css'>
<script language="JavaScript" charset="utf-8" type="text/javascript" src="./views/js/jquery.js"></script>
</head>
<body>
<table width="98%" border="0" cellpadding="4" cellspacing="1" class="table">
<form action="?s=Admin/Data/Upsql" method="post" id="gxform">
<tr class="table_title">
  <td colspan="2">SQL语句运行器</td>
</tr>        
<tr class="tr">
  <td width="100">执行SQL语句：<br><span style="color:#999999">操作需谨慎!</span></td>
  <td ><textarea name="sql" id="sql" type="text" style="height:150px;width:500px;"></textarea></td>
</tr>
<tr class="tr">
  <td colspan="2"><input name="runsql_sub" type="hidden" id="runsql_sub" value="true"><input class="bginput" type="submit" name="submit" value="提交"onClick="return confirm('该操作需要慎重操作,请确定是否执行!')"> <input class="bginput" type="reset" name="Input" value="重置" >
  </td>
</tr>
<tr class="tr">
  <td colspan="2">常用语句：<br />truncate table gx_video 清空影视表 自增ID归0<br />update gx_comment Set status=1 审核所有评论
  </td>
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