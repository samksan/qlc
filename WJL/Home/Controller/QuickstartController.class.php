<?php
namespace Home\Controller;
use Think\Controller;
class QuickstartController extends Controller{
    public function index(){
        echo 'Moudle: Home'.'<br />';
        echo 'Controller: Quickstart'.'<br />';
        echo 'Action: index'.'<br />';
        
        $links = getAddress();
        
        $this->assign('address',$links);
        $this->display();
    }
}