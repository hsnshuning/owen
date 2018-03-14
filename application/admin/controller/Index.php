<?php
namespace app\admin\controller;
use think\Controller;
use app\index\model\Students;
class Index extends Controller
{
    public function index()
    {
        return $this->fetch('index');
    }



    public function searchStudent(){
         $student = new Students;
         if(request()->isGet()){
            $res = $student->where('s_realname', input('realname'))
                    ->order('s_id', 'desc')
                    ->select();
        // $res = \think\Db::table('students')->where('s_realname',input('realname'))->select();
            $this->assign('res',$res);
         }
        return $this->fetch('searchstudent');
    }

    public function studentInfo(){
        echo input('s_id');
        // die;
        return $this->fetch('studentinfo');
    }
    public function updateStudent(){
        return $this->fetch('updateStudent');
    }

    public function selectStudent(){
       
    }
}
