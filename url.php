<?php 
$Shortcut = "[InternetShortcut] 
URL  =http://www.xun.com
IDList= [{000214A0-0000-0000-C000-000000000046}] 
IconIndex=43
IconFile=http://www.xun.com/favicon.ico
Prop3 = 19,2
"; 
Header("Content-type: application/octet-stream"); 
header("Content-Disposition: attachment; filename=��Ӱ��Դ��.url;"); 
echo $Shortcut; 
?>