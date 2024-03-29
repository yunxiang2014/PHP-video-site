<?php
return array (
  'db_type' => 'mysql',
  'db_host' => 'localhost',
  'db_name' => 'gxcms',
  'db_user' => 'root',
  'db_pwd' => 'root',
  'db_port' => '3306',
  'db_prefix' => 'gx_',
  'default_theme' => '#@!_ziyuan5_',
  'web_name' => 'Monster',
  'web_url' => 'http://localhost/',
  'web_path' => '/',
  'web_hotkey' => 'hotTage1|hotTage2|hotTage3|hotTage4',
  'web_keywords' => 'Monster video website',
  'web_description' => 'Welcome to Monster for building a big video website',
  'web_email' => 'XXXXXXXX',
  'web_qq' => 'XXXXXXXX',
  'web_copyright' => 'This website is made by Monster team for Software Engineering class. Monster team has the copyright.',
  'web_tongji' => '<script language="javascript" type="text/javascript" src="http://js.users.51.la/4469310.js"></script>',
  'web_icp' => 'We are the best',
  'web_adsensepath' => 'temp/Banner',
  'web_admin_pagenum' => 20,
  'web_home_pagenum' => '5',
  'web_admin_hits' => 500,
  'web_hits_way' => '0',
  'web_hits_time' => 5,
  'web_admin_updown' => 100,
  'web_admin_score' => 9,
  'web_collect_num' => 3,
  'web_admin_edittime' => true,
  'web_admin_ordertype' => 'addtime',
  'web_admin_language' => '国语,粤语,English,韩语,日语,法语,中文字幕,英文字幕',
  'web_admin_area' => '中国,内地,香港,台湾,韩国,日本,America,英国,法国,意大利,德国,西班牙,泰国',
  'web_admin_nav' => 
  array (
    '网站信息配置' => '?s=Admin/Config/Conf/id/web',
    '视频数据管理' => '?s=Admin/Video/Show',
    '影片采集中心' => '?s=Admin/Collect/Show',
    '网站栏目管理' => '?s=Admin/Channel/Show',
    '网站广告管理' => '?s=Admin/Adsense/Show',
    '快捷菜单设置' => '?s=Admin/Config/Conf/id/nav',
  ),
  'upload_path' => 'pic/uploads',
  'upload_style' => 'Y-m-d',
  'upload_thumb' => '1',
  'upload_thumb_w' => 136,
  'upload_thumb_h' => 190,
  'upload_water' => '0',
  'upload_water_img' => 'views/images/water.gif',
  'upload_water_pct' => 80,
  'upload_water_pos' => 9,
  'upload_http_down' => 10,
  'upload_http' => '1',
  'upload_ftp' => '0',
  'upload_ftp_host' => '255.255.255.255',
  'upload_ftp_user' => 'username',
  'upload_ftp_pass' => 'userpwd',
  'upload_ftp_port' => 21,
  'upload_ftp_dir' => 'uploads',
  'upload_ftp_url' => 'http://www.xun.com/pic/',
  'tmpl_cache_on' => false,
  'html_cache_on' => false,
  'html_cache_time' => 0,
  'html_read_type' => 0,
  'html_cache_index' => 1,
  'html_cache_list' => 24,
  'html_cache_content' => 24,
  'html_cache_play' => 24,
  'html_cache_mytpl' => '1',
  'url_html_suffix' => '.html',
  'html_file_suffix' => '.html',
  'url_rewrite' => '0',
  'url_html' => '0',
  'url_html_rule' => '2',
  'url_html_channel' => '0',
  'url_html_play' => '0',
  'url_create_time' => 2,
  'url_create_num' => 30,
  'url_dir_video' => 'vodlist',
  'url_dir_videoread' => 'detail',
  'url_dir_videoplay' => 'play',
  'url_dir_info' => 'infolist',
  'url_dir_inforead' => 'detail-n',
  'url_dir_special' => 'special',
  'url_dir_maps' => 'maps',
  'url_dir_all' => '',
  'user_register' => '1',
  'user_comment' => '1',
  'user_check' => '0',
  'user_pay' => '0',
  'user_post' => '0',
  'user_paycid' => 
  array (
    0 => '8',
    1 => '9',
    2 => '10',
    3 => '11',
    4 => '12',
    5 => '13',
    6 => '14',
    7 => '15',
    8 => '16',
    9 => '17',
    10 => '18',
    11 => '19',
    12 => '20',
    13 => '21',
    14 => '3',
    15 => '5',
    16 => '6',
  ),
  'user_money_play' => 1,
  'user_money_change' => 100,
  'user_money_add' => 20,
  'user_check_time' => 60,
  'user_page_cm' => 8,
  'user_page_gb' => 10,
  'user_replace' => '脏话|法轮功|枪械|A片|三级|伦理',
  '_htmls_' => 
  array (
    'home:index:index' => 
    array (
      0 => '{:action}',
      1 => 3600,
    ),
    'home:video:lists' => 
    array (
      0 => '{:module}_{:action}/{$_SERVER.REQUEST_URI|md5}',
      1 => 86400,
    ),
    'home:info:lists' => 
    array (
      0 => '{:module}_{:action}/{$_SERVER.REQUEST_URI|md5}',
      1 => 86400,
    ),
    'home:video:detail' => 
    array (
      0 => '{:module}_{:action}/{id|md5}',
      1 => 86400,
    ),
    'home:info:detail' => 
    array (
      0 => '{:module}_{:action}/{$_SERVER.REQUEST_URI|md5}',
      1 => 86400,
    ),
    'home:video:play' => 
    array (
      0 => '{:module}_{:action}/{id|md5}',
      1 => 86400,
    ),
    'home:my:show' => 
    array (
      0 => '{:module}_{:action}/{$_SERVER.REQUEST_URI|md5}',
      1 => 3600,
    ),
  ),
  'player_width' => 480,
  'player_height' => 853,
  'player_down' => 'http://dl.client.com/baiduPlayer/un/BaiduPlayer_78062058.exe',
  'player_buffer' => 'http://union.gxcms.com/app/buffer.html',
  'player_pause' => 'http://union.gxcms.com/app/pause.html',
  'player_time' => '8',
  'web_indexkey' => '',
  'web_admin_yswyc' => '1',
  'web_admin_zxwyc' => '1',
  'play_bf' => '',
  'play_end' => '',
  'xunlei_down' => '',
  'down_bf' => '',
);
?>