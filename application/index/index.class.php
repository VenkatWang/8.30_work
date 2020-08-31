<?php
use \libs\smarty;
use \libs\db;
use \libs\getheader;
if(!defined("MVC")){
    die("非法入侵");
}
class index{
//    function int(){
////        $en=new engine();
////        $en->setTemplateDir(TPL_PATH);
////        $en->setCompileDir(COMPILE_PATH);
////        $en->setCacheDir(CACHE_PATH);
////        $en->cache=true;
//        //使用smarty
//        $smarty=new Smarty();
//        $smarty->setTemplateDir(TPL_PATH);
//        $smarty->setCompileDir(COMPILE_PATH);
//
//        //从数据库里面读取
//        //1.连接数据库
//$db=@new mysqli("localhost","root","123456","wui2006","3308");
////var_dump(mysqli_connect_error());
//   if(mysqli_connect_error()){
//       die("数据库连接错误");
//   }
//
//   //2.对数据库进行查询
//   $db->query("set names utf8");  //通过什么样的编码去查询数据库
////   $db->query("insert into demo(name,age,sex)VALUES('胡伊康',12,'男') ");
////   $db->query("update demo set name='老王' where  name ='胡伊康'");
//
//   $db->query("delete from demo where name='王五'");
//   $result =$db->query("select * from demo");
//        echo "<pre>";
//        $array=array();
//   while ($row=$result->fetch_assoc()){
//
//       $array[]=($row);
//   }
//   var_dump($array);
////  结果集对象   结果集是一个对象->方法，获取的具体数据
////    $result=$db->query("select * from demo");
////  关联数据
////    $result->fetch_assoc();
////  索引数组
////    $result->fetch_row();
////  既有关联数据又有索引数组
////    $result->fetch_array();
//   //3.如何将数据从结果里面取出来
//$data=array();
//while ($row=$result->fetch_assoc()){
//    $data[]=($row);
//}
////var_dump($data);
//
////        $smarty->assign("data",$arr);
////        $smarty->display("index.html");
//        $smarty->assign("data",$data);
//        $smarty->display("index.html");
//}
  function int(){
      $smarty=new smarty();
//      $arr=array();
//      $database=new db();
//      $db=$database->db;
//      $i=0;
//      $result=$db->query("select * from category where pid=0");
//      while ($row=$result->fetch_assoc()){
//          $arr[$i]=$row;
//          $result1=$db->query("select * from category where pid=".$row["cid"]);
//          while ($row1=$result1->fetch_assoc()){
//              $arr[$i]["child"][]=$row1;
//          }
//          $i++;
//      }
      $header=new getheader();
      $smarty->assign("menuData",$header->menuData);
      $smarty->assign("header",TPL_PATH."index/header.html");
      $smarty->display("index/index.html");
  }


}