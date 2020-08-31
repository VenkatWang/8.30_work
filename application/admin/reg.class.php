<?php
class reg extends main{
    function add(){
        $smarty=new Smarty();
        $smarty->setTemplateDir(TPL_PATH);
        $smarty->setCompileDir(COMPILE_PATH);
        $smarty->display("admin/reg.html");
        echo "注册";
    }
    function addUser(){
          $uname=$_POST["uname"];
          $pass=$_POST["pass"];
          $pass1=$_POST["pass1"];
          if(!$pass==$pass1){
              echo "密码不一致";
              return;
          }
//          $db=new mysqli("localhost","root","123456","wui2006","3308");
//          if(mysqli_connect_error()){
//              die("数据库连接错误");
//          }
          $db=$this->db;
          $db->query("set names utf8");

          $db->query("insert into mvcuser (uname,pass) VALUES ('$uname','$pass')");

          if($db->affected_rows>0){
              echo "插入成功";
          }
    }
    function checkName(){
        $uname=$_POST["uname"];
        $db=$this->db;
        $result=$db->query("select uname from mvcuser where uname='{$uname}'");
         var_dump($result);
        if($result->num_rows==0){
            echo "true";
        }else{
            echo "false";
        }
    }
}