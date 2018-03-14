<?php
namespace app\admin\controller;
use think\Controller;

class Recruitstudentmanage extends Controller{
	public function index(){
		return $this->fetch('recruitstudentmanage');
	}
}
?>