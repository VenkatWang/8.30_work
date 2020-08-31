<?php
use \libs\smarty;
use \libs\db;
use \libs\getheader;
if(!defined("MVC")){
    die("非法入侵");
}
class lists{
    function int(){
        $db= new db();
        $db=$db->db;

        $cid=$_GET["cid"];
        $result=$db->query("select * from category where cid=$cid");
        $currentInfo=$result->fetch_assoc();
        $result=$db->query("select ctitle,conid from content where cid=$cid");
        $condata=array();
        while ($row=$result->fetch_assoc()){
            $condata[]=$row;
        }

        $smarty=new smarty();

        $header=new getheader();
        $smarty->assign("menuData",$header->menuData);
        $smarty->assign("header",$header->header);
        $smarty->assign("currentInfo",$currentInfo);
        $smarty->assign("condata",$condata);
        $smarty->display("index/lists.html");
    }
}
