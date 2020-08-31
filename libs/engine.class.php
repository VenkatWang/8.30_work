<?php
class engine{
    //1.获取原始数据
    //2.编译
    //3.显示到页面当中
    //4.分配变量
    private $templateDir="template";  //模板路径
    private $compileDir="compile";
    private $cacheDir="cache";
    public $cache=false;
    //编译路径
    private $arr=array();
    private function getDate($file){  //引入
        $destfile=$this->templateDir.$file;
        if(is_file($destfile)){
             return file_get_contents($destfile);
        }else{
            die("this template not found!");
        }
    }
    public function setTemplateDir($path){  //修改模板路径
        $this->templateDir=$path;
    }
    public function setCompileDir($path){
        $this->compileDir=$path;
    }
    public function setCacheDir($path){
        $this->cacheDir=$path;
    }
    private function compile($file){    //转义
        $con=$this->getDate($file);
        $reg='/\{(\$[a-zA-Z][^\}]*)\}/';  //解析变量
        $one=preg_replace_callback($reg,function ($val){
            return '<?php echo '.$val[1].'?>';
        },$con);//变量解析完

        $reg1='/\{foreach([^\}]*)\}/';  //解析foreach开始
        $two=preg_replace_callback($reg1,function ($val){
            return '<?php foreach( '.$val[1].'){?>';
        },$one);

        //解析foreach结束
        $reg2='/\{\/foreach\}/';
        $three=preg_replace_callback($reg2,function ($val){
            return '<?php } ?>';
        },$two);
        return $three;

    }


    function display($file){
        $outFileName=$this->compileDir.basename($file,".html").".php";
        $cacheFileName=$this->cacheDir.basename($file,".html").".htm";
        $inFileName=$this->templateDir.$file;

        if($this->cache&&is_file($cacheFileName)&&filemtime($cacheFileName)>filemtime($inFileName)){
             include_once $cacheFileName;
        }else {
            if (is_file($outFileName) && filemtime($outFileName) > filemtime($inFileName)) {  //判断文件是否已经编译
                foreach ($this->arr as $k => $v) {
                    $$k = $v;
                }
                include_once $outFileName;
            } else {
                $result = $this->compile($file);

                file_put_contents($outFileName, $result);

                foreach ($this->arr as $k => $v) {
                    $$k = $v;
                }
                if($this->cache){
                     ob_start();
                    include_once $outFileName;
                    $con=ob_get_contents();
                    file_put_contents($cacheFileName,$con);
                    ob_end_flush();
                }
                include_once $outFileName;
            }
        }

    }

    function assign($attr,$val){  //分配变量
        $this->arr[$attr]=$val;
    }
}