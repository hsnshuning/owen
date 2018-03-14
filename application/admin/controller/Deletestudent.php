<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\AStudents;
use think\View;
class Deletestudent extends Controller{
	public function deletestudent(){
		$id = input('s_id');
		if(db('a_students')->where('s_id',$id)->delete()){
//			return $this->success("删除成功","admin/searchteacher/index");
			return $this->fetch('delstudentsuccess');
		}else{
			return $this->fetch('delstudentfail');
		}
		
	}
}
?>
