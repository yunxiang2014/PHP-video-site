<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=7" />
<title>采集影片自定义转换-<?php echo C("web_name");?></title>
<link rel='stylesheet' type='text/css' href='./views/css/admin_style.css'>
<link rel='stylesheet' type='text/css' href='./views/css/collect.css'>
<link rel='stylesheet' type='text/css' href='./views/css/dialog.css'>
<script language="JavaScript" charset="utf-8" type="text/javascript" src="./views/js/jquery.js"></script>
<script language="JavaScript" charset="utf-8" type="text/javascript" src="./views/js/admin_all.js"></script>
<script language="JavaScript" charset="utf-8" type="text/javascript" src="./views/js/collect.js"></script>
<script language="JavaScript" charset="utf-8" type="text/javascript" src="./views/js/dialog.js"></script>
<script language="JavaScript" charset="utf-8" type="text/javascript" src="./views/js/formvalidator.js"></script>
<style type="text/css">
<!--
.green{ color:#0c8918;}
.note span{font-weight:600;}
-->
</style>
<script type="text/javascript">
<!--
function UpdateOne(tid)
{ 
	location = "?s=Admin/CustomCollect/AutoChannel/action/update/cname/"+encodeURI(document.getElementById('cname'+tid).value)+"/reid/"+document.getElementById('reid'+tid).value+"/nid/"+document.getElementById('nid'+tid).value+"/id/"+tid;
}
function DeleteOne(tid)
{
	location = "tags_main.php?action=delete&ids="+tid;
}
-->
</script>
</head>
<body>
<table width="98%" border="0" cellpadding="5" cellspacing="1" class="table">
<tr>
  <td colspan="6" class="table_title">
  <ul>
  <li><a  href="?s=Admin/CustomCollect/ListShow">采集节点管理</a> </li>
  <li><a href="?s=Admin/CustomCollect/Add">添加采集节点</a></li>
    <li><a href="?s=Admin/CustomCollect/Manage/action/import">导入采集规则</a></li>
  </ul>
  <!--<span class="fr"><a href="javascript:void(0)" onclick="$('#add_form').show();">添加转换</a></span>-->
  </td>
  
</tr>
<tr class="tr" id='search'>
<form action="?s=Admin/CustomCollect/AutoChannel/" method="post"  name="search" >
<td colspan="6"><table width="700px" border="0" cellspacing="0" cellpadding="0"  align="left">
  <tr>
    <td width="5%"><strong>分类转换查询：</strong></td>
    <td width="5%">栏目：</td>
    <td width="25%"><input type="text" name="cname" value="<?php echo ($list['search']['cname']); ?>"/></td>
    <td width="10%">对应系统栏目：</td>
    <td width="20%">
    <select  name="reid">
<option value="">选择分类</option>
<?php if(is_array($channel_tree)): $i = 0; $__LIST__ = $channel_tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gxcms): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($gxcms["id"]); ?>" <?php if(($gxcms["id"])  ==  $list['search']['reid']): ?>selected<?php endif; ?>><?php echo ($gxcms["cname"]); ?></option>
<?php if(is_array($gxcms['son'])): $i = 0; $__LIST__ = $gxcms['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gxcms): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($gxcms["id"]); ?>" <?php if(($gxcms["id"])  ==  $list['search']['reid']): ?>selected<?php endif; ?>>├ <?php echo ($gxcms["cname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
</select>
</td>
    <td width="10%">所属采集节点项目:</td>
    <td width="20%">
    <select name="nid">
    <option value="0">所有节点项目</option>
    <?php if(is_array($nodetree)): $i = 0; $__LIST__ = $nodetree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$node): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($node["id"]); ?>" <?php if(($node["id"])  ==  $list['search']['nid']): ?>selected<?php endif; ?>><?php echo ($node["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
    </select></td>
    <td width="5%"><input type="submit" name='search' value="查 询"/></td>
  </tr>
</table>
</td>
</form>
</tr>
<!--<tr class="tr"> <td colspan="6"><div class="note" >分类转换规则：1、先自动匹配系统栏目分类，匹配不成功则继续进行 。<BR>2、检测由此页面设置的分类规则（优先级:所属节点>所有节点项目）。3、模糊匹配前两个字符。<BR></div></td></tr>-->
<?php if(!empty($list["cache"])): ?><tr class="tr"> <td colspan="6"><div class="note" ><span class="green">温馨提示<br> </span>待转换分类：<?php if(is_array($list["cache"])): $i = 0; $__LIST__ = $list["cache"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$c): ++$i;$mod = ($i % 2 )?>节点<?php echo ($c["1"]); ?>中<span><?php echo ($c["0"]); ?></span>|<?php endforeach; endif; else: echo "" ;endif; ?></div></td></tr><?php endif; ?>
<tr class="tr" id='add_form'>
<form action="?s=Admin/CustomCollect/AutoChannel/action/add" method="post"  name="addform" >
<td colspan="6">
<table width="700px" border="0" cellspacing="0" cellpadding="0"  align="center">

  <tr>
    <td width="5%"><strong>添加分类转换：</strong></td>
    <td width="5%">栏目：</td>
    <td width="25%"><input type="text" name="cname"/></td>
    <td width="10%">对应系统栏目：</td>
    <td width="20%">
    <select  name="reid">
<option value="">选择分类</option>
<?php if(is_array($channel_tree)): $i = 0; $__LIST__ = $channel_tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gxcms): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($gxcms["id"]); ?>" ><?php echo ($gxcms["cname"]); ?></option>
<?php if(is_array($gxcms['son'])): $i = 0; $__LIST__ = $gxcms['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gxcms): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($gxcms["id"]); ?>" >├ <?php echo ($gxcms["cname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
</select>
</td>
    <td width="10%">所属采集节点项目:</td>
    <td width="20%">
    <select name="nid">
    <option value="0">所有节点项目</option>
    <?php if(is_array($nodetree)): $i = 0; $__LIST__ = $nodetree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$node): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($node["id"]); ?>" <?php if(($node["id"])  ==  $vo["nid"]): ?>selected<?php endif; ?>><?php echo ($node["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
    </select></td>
    <td width="5%"><input type="submit"  value="添 加"/></td>
  </tr>
</table>
</td>
</form>
</tr>

<form action="" method="post" id="gxform" name="gxform">
<tr align="center" class="list_head">
<td width="2%"></td>
<td width='5%'>ID</td>
<td width='20%'>栏目</td>

<td width='15%'>对应系统栏目</td>
<td width='15%'>所属节点项目</td>
<td width='15%'></td>
</tr>
<?php if(is_array($list["arr"])): $i = 0; $__LIST__ = $list["arr"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><tr class="tr" align="center">
<td  width="2%"><input name='ids[]' type='checkbox' value='<?php echo ($vo["id"]); ?>' class="noborder"></td>
<td  width='5%'><?php echo ($vo["id"]); ?></td>
<td  width='20%'><input type="text" value="<?php echo ($vo["cname"]); ?>" name="cname"  id="cname<?php echo ($vo["id"]); ?>"/></td>
<td  width='15%'>
<select id="reid<?php echo ($vo["id"]); ?>">
<option value="">所有分类</option>
<?php if(is_array($channel_tree)): $i = 0; $__LIST__ = $channel_tree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gxcms): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($gxcms["id"]); ?>" <?php if(($gxcms["id"])  ==  $vo["reid"]): ?>selected<?php endif; ?>><?php echo ($gxcms["cname"]); ?></option>
<?php if(is_array($gxcms['son'])): $i = 0; $__LIST__ = $gxcms['son'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$gxcms): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($gxcms["id"]); ?>" <?php if(($gxcms["id"])  ==  $vo["reid"]): ?>selected<?php endif; ?>>├ <?php echo ($gxcms["cname"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?><?php endforeach; endif; else: echo "" ;endif; ?>
</select>
</td>
<td  width='15%'>
<select id="nid<?php echo ($vo["id"]); ?>">
<option value="0">所有节点项目</option>
<?php if(is_array($nodetree)): $i = 0; $__LIST__ = $nodetree;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$node): ++$i;$mod = ($i % 2 )?><option value="<?php echo ($node["id"]); ?>" <?php if(($node["id"])  ==  $vo["nid"]): ?>selected<?php endif; ?>><?php echo ($node["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
</select></td>
<td class="td" id='action'><a href='javascript:UpdateOne(<?php echo ($vo["id"]); ?>);'>[更新]</a><a href="?s=Admin/CustomCollect/AutoChannel/action/del/id/<?php echo ($vo["id"]); ?>"  onClick="return confirm('确定删除该视频吗?')" title="点击删除影片">删除</a></td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>

<tr class="tr"><td colspan="6" class="pages"><?php echo ($list['pagelist']['listpages']); ?></td></tr>
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