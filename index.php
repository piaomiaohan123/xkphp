<?php

/**
 * author hades
 * mail piaomiaohan12@163.com
 * 2016.10.08 
 * 
 */


//检测开发环境
if (version_compare(PHP_VERSION, '5.3.0','<')) die('require PHP>5.3.0');


//是否开启debug模式 ,默认开启debug模式
define('APP_DEBUG',true);



//定义应用目录
define('APP_PATH','./Application');



include "./XkPHP/XKPHP.php";

