<?php 
define("APPID","wx36fa59f034d2994a");
define("APPSECRET","f94522623e5196f606016cf2281d4c67");
define("TOKEN","weixin39");

header("content-type:text/html;charset=utf-8");
require("./wechat.inc.php");
$wechat = new WeChat(APPID,APPSECRET,TOKEN);

$c = $wechat->_sendAll('今天真的是最后一天了! ');

