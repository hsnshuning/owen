<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\ATeachers;
use think\View;
class Deleteteacher{
	public function index(){
		$view = new View;
		return $view->fetch('deleteteacher');
	}
	
	public function deleteteacher(){
		$id = input('t_id');
		if(db('a_teachers')->where('t_id',$id)->delete()){
//			return $this->success("删除成功","admin/searchteacher/index");
			echo "删除成功";
		}else{
			echo "删除失败";
		}
		
	}
}
?>
