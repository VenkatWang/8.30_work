<?php
namespace libs;


class upload{
    public  $fullpath;
    //定义的文件上传的大小
    public $filesize;
    //文件上传类型
    public $fileType=array("image/png","image/jpeg","image/gif");
    //上传文件的表单名字
    public $filename="file";
    //上传文件默认目录
    public $defaultDir="upload";


    function __construct()
    {
        $this->filesize=1024*1024*5;
    }
    //接受到的数据
    private function accept(){
        $this->data=$_FILES[$this->filename];
    }

    //检查数据
    private function check(){
        if(is_uploaded_file($this->data["tmp_name"])){
            if($this->data["size"]<$this->filesize){
                if(in_array($this->data["type"],$this->fileType)){
                    return true;
                }else{
                    echo "文件类型不合法";
                }
            }else{
                echo "文件太大";
                return false;
            }
        }else{
            echo "文件不合法";
            return false;
        }
    }

    function up(){
        //1.接受上传的数据
        $this->accept();
        //2.检查数据是否合法
        if($this->check()){
            //3.创建文件夹
            $this->createDir();
            //4.移动到指定文件夹
            $this->move();
        }

    }

    private function createDir(){
        if(!is_dir($this->defaultDir)){
            //不存在这个目录 去创建
            mkdir($this->defaultDir,"0777","true");
        }
        $currentDir= $this->defaultDir."/".date("Y-m-d");
        if(!is_dir($currentDir)){
            mkdir($currentDir,"0777","true");
        }
        $filename=time().mt_rand(1000,20000).$this->data["name"];
        $this->fullpath=$currentDir.DIRECTORY_SEPARATOR.$filename;
        $this->fullpath;
    }
    function move(){
        move_uploaded_file($this->data["tmp_name"],"$this->fullpath");
    }

}
