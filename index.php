<?php
/*
 * 控制 将视图和数据捏合在一起
 * 路由的方式
 * */
//用来记录一个口令
session_start();
header("content-type:text/html;charset=utf8");
define("MVC",true);
 //应用文件夹
define("APP_DIR_NAME","application");
define("APP_NAME",__DIR__.DIRECTORY_SEPARATOR.APP_DIR_NAME.DIRECTORY_SEPARATOR);

require_once "libs/start.php";