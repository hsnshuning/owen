<?php
namespace app\index\controller;
use think\Controller;
use app\index\model\Students;
class Index extends Controller
{
    public function index()
    {
        return $this->fetch('index');
    }
    public function schoolsummary(){
    	return $this->fetch('schoolsummary');
    }
    public function teachersummary(){
    	return $this->fetch('teachersummary');
    }
    public function coursesummary(){
    	return $this->fetch('coursesummary');
    }
    public function enroll(){
    	return $this->fetch('enroll');
    }
    public function recruit(){
    	return $this->fetch('recruit');
    }
    public function studentregister(){
    	return $this->fetch('studentregister');
    }

    //查询学生信息
   

    public function addStudent(){
        $student = new Students;
        if(request()->isPost()){
            $student->data([
                's_username'  =>  input('username'),
                's_password' =>  input('password'),
                's_realname' =>  input('realname'),
                's_idcard' =>  input('idcard'),
                's_phone' =>  input('phone')
            ]);
            $student->save();
        }
    }


    
    public function teacherregister(){
        return $this->fetch('teacherregister');
    }
    public function login(){
        return $this->fetch('login');
    }
    
   /* public function loginverify(){
    	if(request()->isPost()){
    		$type=input('type');
    		if('student' == $type){
    			
    		}else if('teacher' == $type){
    			echo "teacher";
    		}else if ('admin' == $type){
    			echo "admin";
    		}
    	}
    	return $this -> fetch('loginverify');
    }*/

}
