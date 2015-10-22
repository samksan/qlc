<?php
namespace Home\Controller;
use Think\Controller;
class ChartController extends Controller{
    public function index(){
        echo 'Moudle: Home'.'<br />';
        echo 'Controller: Chart'.'<br />';
        echo 'Action: index'.'<br />';
        
        $links = getAddress();
        
        $this->assign('address',$links);
        $this->display();
    }
}