<?php
namespace app\admin\controller;
use think\Controller;

class Informmanage extends Controller{
	public function index(){
		return $this->fetch('informmanage');
	}
	
	public function add(){
		return $this->fetch('addinform');
	}
}
?>