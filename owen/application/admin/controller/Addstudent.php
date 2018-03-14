<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\AStudents;
use think\View;
class Addstudent extends Controller{
	public function index(){
         $view = new View();
         return $view->fetch('addstudents');
    }
    
    public function add(){
		//判断是否是post提交过来的
		if(request()->isPost()){
			$a_students = new AStudents();
			$a_students->data([
				's_id' => input('s_id'),
				's_name' => input('s_name'),
				's_parentname' => input('s_parentname'),
				's_phone' => input('s_phone')
			]);
			$res = $a_students -> save();
			$view = new View();
			if($res){
				return $view -> fetch('addstudentsuccess');
			}else{
				return $view -> fetch('addstudentfail');
			}
		}	
		
		
	}
    
    
    
	

}

?>