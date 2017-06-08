<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    public function index(){
        $this->display();

    }
    public function free($token){
        
        $r = $this->CheckToken($token);
        if($r == true){
          $this->show('连接服务器成功！');
        }else{
          $this->show('TOKEN令牌校验失败！');
        }
    }
    public function door(){
       $re = $this->con('door','1');
       echo $re;
    }
    public function ziyou(){
       $re = $this->con('ziyou','1');
       echo $re;
    }
    public function window(){
       $re = $this->con('window','1');
       echo $re;
    }
    public function robot(){
       $re = $this->con('robot','1');
       echo $re;
    }
    public function music(){
       $re = $this->con('aka','1');
       echo $re;
    }
    public function op_d(){
       $re = $this->con('opd','1');
       echo $re;
    }
    public function cl_d(){
       $re = $this->con('cld','1');
       echo $re;
    }
    public function op_w(){
       $re = $this->con('opw','1');
       echo $re;
    }
    //执行关窗帘命令
    public function cl_w(){
       $re = $this->con('clw','1');
       echo $re;
    }
    //执行扫地命令
    public function s_c(){
       $re = $this->con('sc','1');
       echo $re;
    }
    // 核心函数
    public function con($A,$B,$C){
       $dsn=C('DB_DSN');
       $conn=odbc_connect($dsn,C('DB_USER'),"",SQL_CUR_USE_ODBC );
       $sql="update system set state= '{$B}' where name = '{$A}'";
       $re=odbc_exec($conn, $sql);
       if($re){
            if($C==NULL){
              return "操作成功！";
            }else{
              return $B;
            }
        }else{    
            return "操作失败！";
        }
    }
    //生成TOKEN
    public function GetToken(){
      $re = $this->con('token',$this->generate(),1);
      echo $re;
    }
    //校验TOKEN
    public function CheckToken($ClientToken){
      $dsn=C('DB_DSN');
      $conn=odbc_connect($dsn,C('DB_USER'),"",SQL_CUR_USE_ODBC );
      $sql="select * from system where name='token'";
       $re=odbc_exec($conn, $sql);
      if($re){
        $result = odbc_result($re, 3);
        if($ClientToken == $result){
            //校验成功
            return true;
        }else{
            //校验失败
            return false;
        }

        }else{    
            return false;
        }
    }

    public function generate()
    {
        $str = md5(uniqid(md5(microtime(true)),true));  //生成一个不会重复的字符串
        $str = sha1($str);  //加密
        return $str;
    }
}