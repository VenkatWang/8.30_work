<?php
//将信息存储到服务器，给客户端返回一个加密的cookie
//session给客户端返回一个服务的凭证，真正的信息在服务器存储
session_id(md5("abcddf"));
session_start();
//setcookie("myid",md5("asda"),time()+10);
$_SESSION["name"]="lisi";
$_SESSION["age"]="12";
$_SESSION["sex"]="man";
$_SESSION["login"]="yes";
//session_destroy();
echo $_SESSION["sex"];
echo $_SESSION["name"];
echo $_SESSION["age"];
echo $_SESSION["login"];

//unset($_SESSION["name"]);
