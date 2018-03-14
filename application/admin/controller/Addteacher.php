<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\ATeachers;
use think\View;
class Addteacher extends Controller{
	public function index(){
         $view = new View();
         return $view->fetch('addteacher');
    }
    
    public function add(){
		//判断是否是get提交过来的
		if(request()->isGet()){
			$a_teachers = new ATeachers();
			$a_teachers->data([
				't_id' => input('t_id'),
				't_name' => input('t_name'),
				't_idcard' => input('t_idcard'),
				't_phone' => input('t_phone')
			]);
			$res = $a_teachers -> save();
			$view = new View();
			if($res){
				
				return $view -> fetch('addteachersuccess');
			}else{
				return $view -> fetch('addteacherfail');
			}
		}	
		
	}
    
    
    
	

}

?>