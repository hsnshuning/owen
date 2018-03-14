<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\ATeachers;
use think\View;
class Deleteteacher extends Controller{
	
	public function deleteteacher(){
		$id = input('t_id');
		if(db('a_teachers')->where('t_id',$id)->delete()){
//			return $this->success("删除成功","admin/searchteacher/index");
			return $this->fetch('delteachersuccess');
		}else{
			return $this->fetch('delteacherfail');
		}
		
	}
}
?>
