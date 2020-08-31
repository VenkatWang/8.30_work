<?php
if(!defined("MVC")){
    die("非法入侵");
}
use \libs\smarty;
use \libs\db;
use \libs\upload;
class category{
    public $arr=array();

    function int(){
        $smarty=new smarty();
        $database=new db();
        $this->db=$database->db;
        $str="";
//        $str="<table class='table table-bordered'>";
        $this->tree(0,$str);
//        $str.="<table>";

        $smarty->assign("data",$str);
        $smarty->display("admin/category.html");
    }
    function tree($pid=0,&$str,$i=0){
        $result=$this->db->query("select * from category where pid=".$pid);

        while ($row=$result->fetch_assoc()){
            if($row["isshow"]==1){
                $s="可见";
            }else{
                $s="不可见";
            }
            $str.='<tr><td>'.$i.'级目录</td><td>'.str_repeat("→",$i).$row["cname"].'</td><td>'.$s.'</td><td>
          <a class="add" href="javascript:;" attr="'.$row["cid"].'">添加</a>
          <a class="remove" href="/server/mvc-test/index.php/admin/category/del?cid='.$row["cid"].'" attr="'.$row["cid"].'">删除</a>
          <a class="edit" href="javascript:;" attr="'.$row["cid"].'" pid="'.$row["pid"].'">修改</a>
          </td></tr>';
            $this->tree($row["cid"],$str,$i+1);
        }
    }
    function show(){

        $cid=$_GET["cid"];
        $database=new db();
        $db=$database->db;
        $result=$db->query("select * from category where cid=".$cid);
        $row=$result->fetch_assoc();
        echo json_encode($row);
    }
    function getOption(){
        $this->treeOption(0,$this->arr);
        echo json_encode($this->arr);
    }
    function treeOption($pid,&$arr)
    {
        $database=new db();
        $this->db=$database->db;
        $result = $this->db->query("select * from category where pid=".$pid);
        $i=0;
        while ($row = $result->fetch_assoc()) {
             $arr[$i]=array(
                 "cname"=>$row["cname"],
                 "cid"=>$row["cid"],
                 "pid"=>$row["pid"]
             );
             $this->treeOption($row["cid"],$arr[$i]["child"]);
             $i++;
        }
    }
    function addpage(){
        $smarty=new smarty();
        $smarty->display("admin/addpage.html");
    }
    function add(){
        if(isset($_POST["cid"])){
            $cid=$_POST["cid"];
        }else{
            $cid=0;
        }

        $path=$_POST["imgurl"];

        $cname=$_POST["cname"];
        $isshow=$_POST["isshow"];
        $info=$_POST["info"];
        $tpl_name=$_POST["tpl_name"];

        $database=new db();
        $db=$database->db;
        $db->query("insert into category(cname,pid,isshow,tpl_name,info,imgurl) values ('$cname','$cid','$isshow','$tpl_name','$info','$path')");
        if($db->affected_rows>0){
            header("location:/server/mvc-test/index.php/admin/category");

        }
    }
    function del(){
          $cid=$_GET["cid"];

          $database=new db();
          $db=$database->db;
          $result=$db->query("select * from category where pid=".$cid);

          if($result->num_rows>0){
              echo "<script>alert('请先删除子目录');location.href='/server/mvc-test/index.php/admin/category'</script>";
          }else{
              $db->query("delete from category where cid=".$cid);
              if($db->affected_rows>0){
                  header("location:/server/mvc-test/index.php/admin/category");

              }
          }


    }
    function editcon(){
        $cname=$_GET["cname"];
        $pid=$_GET["pid"];
        $cid=$_GET["cid"];
        $isshow=$_GET["isshow"];
        $info=$_GET["info"];
        $tpl_name=$_GET["tpl_name"];
        $imgurl=$_GET["imgurl"];
        echo $imgurl;
        $database=new db();
        $db=$database->db;
        $db->query("update category set
        cname='{$cname}',pid={$pid},isshow=$isshow,info='$info',tpl_name='$tpl_name',imgurl='{$imgurl}' where cid=".$cid);
        if($db->affected_rows>0){
            echo "ok";
        }
    }
    function upload(){
        $smarty=new smarty();
        $smarty->display("admin/upload.html");
    }
    function uploadfile(){
        $upload=new upload();
        $upload->up();
        $path=HOST_ADD."/server/mvc-test/".$upload->fullpath;
        echo $path;
    }
}