<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Admin;
class LoginVerify extends Controller
{
    public function loginverify(){
    	$res;
    	if(request()->isPost()){
    		$type=input('type');
    		if('student' == $type){
    			echo "student";
    			//开始写校验
    		}else if('teacher' == $type){
    			echo "teacher";
    		}else if ('admin' == $type){
    			$a_name = input('username');
    			$a_password = input('password');
    			$admin = new Admin;
    			$res = $admin -> where(
    				['a_name' => $a_name,'a_password' => $a_password]
    			)
    			->find();
    			if($res == true){
    				return $this -> fetch('admin@index/index');
    			}else{
    				return $this -> fetch('index/login');
    			}
    		}
    	}
    	
    	
    }

}
