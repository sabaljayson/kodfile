<?php 
define('INSTALL_CHANNEL','lamp');
define('KODFILE',1);
$GLOBALS["config"]['settings']['copyright'] = 'Powered by <a href="https://kodcloud.com/?kodref=" target="_blank" draggable="false">KodExplorer v'.KOD_VERSION.'</a> & '.INSTALL_CHANNEL.'  ';

$GLOBALS["config"]['defaultPlugins'] = array(
	'adminer','jPlayer','officeLive','photoSwipe','toolsCommon','yzOffice','zipView'
);

//初始化系统配置
$GLOBALS["config"]['settingSystemDefault']['wallpageDesktop'] = "3,8,10";
$GLOBALS["config"]['settingSystemDefault']['wallpageLogin'] = "3,8,10";
$GLOBALS["config"]['settingSystemDefault']['newUserApp'] = "";
$GLOBALS["config"]['settingSystemDefault']['newUserFolder'] = "document";
$GLOBALS["config"]['settingSystemDefault']['menu'] = array(
	array('name'=>'explorer','type'=>'system','url'=>'index.php?explorer','target'=>'_self','use'=>'1',"subMenu"=>"0"),
	array('name'=>'editor','type'=>'system','url'=>'index.php?editor','target'=>'_self','use'=>'1',"subMenu"=>"0")
);

$GLOBALS["config"]['settingAll']['language'] = array(
	"en"	=>	array("English","英语","English"),
	"zh-CN"	=>	array("简体中文","简体中文","Simplified Chinese")
);
$GLOBALS["config"]['settingAll']['themeall'] = "mac,win10,metro,diy";
$GLOBALS["config"]['settingSystemDefault']['globalCss'] = 
"#version_vip_free,#version_vip_free{display:none !important;}
body .loginbox .open>.dropdown-menu{width: 120px;padding: 10px 0;}
body .loginbox .footer-language li{width: 100%;margin: 0;}
body .topbar .content .top-right ul.dropdown-menu.topbar-language{width: 150px;padding: 10px 0;}
body .topbar .content .top-right ul.dropdown-menu.topbar-language li{width: 100%;margin: 0px;}";