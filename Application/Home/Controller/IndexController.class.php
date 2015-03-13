<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {

    //首页
    public function index(){
        $this->display();
    }

    //插入实习信息 sxxx==实习信息
    public function add_sxxx(){
        if(M('sxxx')->add(I('post.')))
            $this->redirect('add_sxxx_success');
        else
            $this->error("系统繁忙,请稍后再试");
    }
}