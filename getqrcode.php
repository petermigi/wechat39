<?php
define("APPID","wx36fa59f034d2994a");
define("APPSECRET","f94522623e5196f606016cf2281d4c67");
define("TOKEN","");
header("content-type:image/jpeg");

require("./wechat.inc.php");
$wechat = new WeChat(APPID,APPSECRET,TOKEN);
echo $wechat->_getQRCODE(604800,"temp",66); //临时二维码,场景id为6
//echo $wechat->_getQRCODE(604800,"forever",8); //永久二维码,场景id为8