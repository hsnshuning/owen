<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\ATeachers;
use think\View;

class UpdateTeacher extends Controller{
	public function index(){
		if(request()->isGet()){
			$teacher = new ATeachers;
			$res = $teacher->where("t_id",input('t_id'))
					->find();
			return $this->fetch('updateteacher',[
				't_id'=>$res->t_id,
				't_name'=>$res->t_name,
				't_idcard'=>$res->t_idcard,
				't_phone'=>$res->t_phone
			]);
		}
		
		
		
	}
	
	
	public function update(){
		if(request()->isPost()){
			$teacher = new ATeachers;
			$t_id = input('t_id');
			$t_name = input('t_name');
			if($t_name!=""){
				$teacher->where('t_id',$t_id )
				->update([
					't_name' => $t_name
				]);
			}
			$t_idcard = input('t_idcard');
			if($t_idcard!=""){
				$teacher->where('t_id',$t_id )
				->update([
					't_idcard' => $t_idcard
				]);
			}
			$t_phone = input('t_phone');
			if($t_phone!=""){
				$teacher->where('t_id',$t_id )
				->update([
					't_phone' => $t_phone
				]);
			}
			$res = $teacher->where("t_id",input('t_id'))
					->find();
			return $this->fetch('updateteacher',[
				't_id'=>$res->t_id,
				't_name'=>$res->t_name,
				't_idcard'=>$res->t_idcard,
				't_phone'=>$res->t_phone
			]);
		}
		
	}
}
?>