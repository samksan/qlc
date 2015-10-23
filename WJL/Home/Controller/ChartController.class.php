<?php
namespace Home\Controller;
use Think\Controller;
class ChartController extends Controller{
    public function index(){
        echo 'Moudle: Home'.'<br />';
        echo 'Controller: Chart'.'<br />';
        echo 'Action: index'.'<br />';
        
        // 链接地址
        $links = getAddress();        
        $this->assign('address',$links);
        
        // 开奖数据
        $kjh = M('kjh');
        $result = $kjh->select();
        
        // 开奖号码经过处理返回表格形式的数组
        
        $this->assign('kjh',numbersFormat($result));
        
//         dump($result);
        $this->display();
    }
}