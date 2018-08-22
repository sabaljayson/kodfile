<?php 
define('INSTALL_CHANNEL','lamp');
$GLOBALS["config"]['defaultPlugins'] = array(
	'adminer','jPlayer','officeLive','photoSwipe','toolsCommon','yzOffice','zipView'
);

//初始化系统配置
$GLOBALS["config"]['settingSystemDefault']['wallpageDesktop'] = "3,8,10";
$GLOBALS["config"]['settingSystemDefault']['wallpageLogin'] = "3,8,10";
$GLOBALS["config"]['settingSystemDefault']['menu'] = array(
	array('name'=>'explorer','type'=>'system','url'=>'index.php?explorer','target'=>'_self','use'=>'1'),
	array('name'=>'editor','type'=>'system','url'=>'index.php?editor','target'=>'_self','use'=>'1')
);
$GLOBALS["config"]['settingSystemDefault']['globalCss'] = "#version_vip_free{display:none}";