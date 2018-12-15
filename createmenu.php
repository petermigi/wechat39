<?php 
define("APPID","wx36fa59f034d2994a");
define("APPSECRET","f94522623e5196f606016cf2281d4c67");
define("TOKEN","weixin39");

header("content-type:text/html;charset=utf-8");
require("./wechat.inc.php");
$wechat = new WeChat(APPID,APPSECRET,TOKEN);

$menu='{
     "button":[
     {	
          "type":"click",
          "name":"新闻",
          "key":"news"
      },
      {
           "name":"游戏",
           "sub_button":[
           {	
               "type":"view",
               "name":"飞行学校",
               "url":"http://yx8.com/game/feixingxuexiao/"
            },
            {
               "type":"view",
               "name":"丹迪洞穴探险",
               "url": "http://yx8.com/game/dandidongxuetanxian/"
            }]
       }]
 }';
$wechat->_createMenu($menu);
?>