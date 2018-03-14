<?php
namespace app\admin\controller;
use think\Controller;
use app\admin\model\ATeachers;
use think\View;
class Searchteacher extends Controller{
	public function index(){
		$view = new View();
		return $view->fetch('searchteacher');
	}
	
	public function searchteacher(){
        
        if(request()->isGet()){
         	$a_teachers = new ATeachers;
            $res = $a_teachers->where('t_name', input('t_name'))
                    ->order('t_id', 'asc')
                    ->select();
        // $res = \think\Db::table('students')->where('s_realname',input('realname'))->select();
            $this->assign('res',$res);
        }
        
        return $this->fetch('searchteacher');
    }
	
	

}

?>