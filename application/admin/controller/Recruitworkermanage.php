<?php
namespace app\admin\controller;
use think\Controller;

class Recruitworkermanage extends Controller{
	public function index(){
		return $this->fetch('recruitworkermanage');
	}
	
	public function add(){
		return $this->fetch('addrecruitworker');
	}
}
?>