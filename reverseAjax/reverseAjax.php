﻿<?php 
/*
* comet 反向ajax技术
* 又名服务器推技术，server push
* 在实时聊天、消息推送中，比较适宜这种技术
* 
* 服务器端：
* 1、不要断开连接
* 2、有消息时再发送
*
* 原理：HTTP1.1的长连接与chunk传输
* chunk有切割分块的意思
* 就是说--服务器端也不知道到底要传输多少length给浏览器
* 只能每次传1小块chunk
*
* 具体做法：
* php用一个死循环，始终运行
* 有相关消息时，立即把内容推到浏览器上
 */
set_time_limit(0);
ob_start();
echo str_repeat(' ',4000),"<br />";
ob_flush();
flush();

$i = 0;
while(true){
	echo str_repeat(' ',4000),"<br />";
	echo $i++,'<br />';
	ob_flush();//强迫php把内容发给apache
	flush();//强迫webserver把内容发送给浏览器
	sleep(1);
}

?>
