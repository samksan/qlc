<?php
namespace Home\Controller;
use Think\Controller;
class AnalysisController extends Controller{
    public function index(){
        echo 'Moudle: Home'.'<br />';
        echo 'Controller: Analysis'.'<br />';
        echo 'Action: index'.'<br />';
        
        $links = getAddress();
        
        $this->assign('address',$links);
        $this->display();
    }
}