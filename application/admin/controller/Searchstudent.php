<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\AStudents;
use think\View;
class Searchstudent extends Controller{
	public function index(){
		$view = new View();
		return $view->fetch('searchstudent');
	}
	
	public function searchstudent(){
        
        if(request()->isGet()){
         	$student = new AStudents;
            $res = $student->where('s_name', input('s_name'))
                    ->order('s_id', 'asc')
                    ->select();
        // $res = \think\Db::table('students')->where('s_realname',input('realname'))->select();
            $this->assign('res',$res);
        }
        
        return $this->fetch('searchstudent');
    }
	
	

}

?>