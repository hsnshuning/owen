<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\AStudents;
use think\View;

class Updatestudent extends Controller{
	public function index(){
		if(request()->isGet()){
			$student = new AStudents;
			$res = $student->where("s_id",input('s_id'))
					->find();
			return $this->fetch('updatestudent',[
				's_id'=>$res->s_id,
				's_name'=>$res->s_name,
				's_parentname'=>$res->s_parentname,
				's_phone'=>$res->s_phone
			]);
		}
		
		
		
	}
	
	
	public function update(){
		if(request()->isPost()){
			$student = new AStudents;
			$s_id = input('s_id');
			$s_name = input('s_name');
			if($s_name!=""){
				$student->where('s_id',$s_id )
				->update([
					's_name' => $s_name
				]);
			}
			$s_parentname = input('s_parentname');
			if($s_parentname!=""){
				$student->where('s_id',$s_id )
				->update([
					's_parentname' => $s_parentname
				]);
			}
			$s_phone = input('s_phone');
			if($s_phone!=""){
				$student->where('s_id',$s_id )
				->update([
					's_phone' => $s_phone
				]);
			}
			$res = $student->where("s_id",input('s_id'))
					->find();
			return $this->fetch('updatestudent',[
				's_id'=>$res->s_id,
				's_name'=>$res->s_name,
				's_parentname'=>$res->s_parentname,
				's_phone'=>$res->s_phone
			]);
		}
		
	}
}
?>