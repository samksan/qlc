<?php
namespace Home\Controller;
use Think\Controller;
class TestingController extends Controller{
    public function index(){
        echo 'Moudle: Home'.'<br />';
        echo 'Controller: Testing'.'<br />';
        echo 'Action: index'.'<br />';
        
        $links = getAddress();
        
        $this->assign('address',$links);
        $this->display();
    }
}