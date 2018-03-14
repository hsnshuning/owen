<?php
namespace app\admin\controller;
use think\Controller;

class Coursemanage extends Controller{
	public function index(){
		return $this->fetch('coursemanage');
	}
	
	public function add(){
		return $this->fetch('addcourse');
	}
}
?>