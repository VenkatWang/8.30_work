<?php
if(!defined("MVC")){
    die("非法入侵");
}
use \libs\smarty;
use \libs\db;

class content{
    function add(){
        $smarty= new smarty();
        $smarty->display("admin/addcon.html ");
    }

    function addcon(){

         $cid=$_POST["cid"];
         $ctitle=$_POST["ctitle"];
         $cons=$_POST["cons"];
         $database=new db();
         $db=$database->db;
         $db->query('insert into content(ctitle,cons,cid)VALUES ("'.$ctitle.'","'.$cons.'","'.$cid.'")');
         if($db->affected_rows>0){
             echo "<script>alert('插入成功');location.href='/server/mvc-test/index.php/admin/content/add'</script>";
         }else{
             echo "<script>alert('插入失败');location.href='/server/mvc-test/index.php/admin/content/add'</script>";
         }
    }

    function showList(){
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from content as con left join category as cat on con.cid=cat.cid ");
        $arr=array();
        while ($row=$result->fetch_assoc()){
            $arr[]=$row;
        }
        $smarty=new smarty();
        $smarty->assign("data",$arr);
        $smarty->display("admin/showList.html");
    }

    function show(){
       $conid= $_GET["conid"];
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from content where conid=".$conid);
        $row=$result->fetch_assoc();
        $smarty=new smarty();
        $smarty->assign("data",$row);
        $smarty->display("admin/show.html");
    }

    function edit(){
        $conid=$_GET["conid"];
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from content where conid=".$conid);
        $row=$result->fetch_assoc();
        $smarty=new smarty();
        $smarty->assign("data",$row);
        $smarty->display("admin/editcon.html");
    }

    function editcon(){
       $conid=$_POST["conid"];
       $ctitle=$_POST["ctitle"];
       $cons=$_POST["cons"];
       $cid=$_POST["cid"];

        $database=new db();
        $db=$database->db;
        $db->query("update  content set ctitle='$ctitle',cons='$cons',cid=$cid where conid=".$conid);
       if($db->affected_rows>0){
           echo "<script>alert('修改成功');location.href='/server/mvc-test/index.php/admin/content/edit?conid={$conid}'</script>";
       }else{
           echo "<script>alert('修改失败');location.href='/server/mvc-test/index.php/admin/content/edit?conid={$conid}'</script>";
       }
    }
}