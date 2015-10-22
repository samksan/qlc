<?php
namespace Home\Controller;
use Think\Controller;
class QuickstartController extends Controller{
    public function index(){
        echo 'Moudle: Home'.'<br />';
        echo 'Controller: Quickstart'.'<br />';
        echo 'Action: index'.'<br />';
        
        $link['index'] = U('Home/Index/index','',true,true);
        $link['chart'] = U('Home/Chart/index','',true,true);
        $link['quickstart'] = U('Home/Quickstart/index','',true,true);
        $link['analysis'] = U('Home/Analysis/index','',true,true);
        $link['testing'] = U('Home/Testing/index','',true,true);
        
        $this->assign('address',$link);
        $this->display();
    }
}