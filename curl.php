<?php
define("APPID","wx36fa59f034d2994a");
define("APPSECRET","f94522623e5196f606016cf2281d4c67");
define("TOKEN","");

require("./wechat.inc.php");
$wechat = new WeChat(APPID,APPSECRET,TOKEN);
echo $wechat->_getTicket(604800,"temp",8);