<?php
namespace Home\Controller;
use Think\Controller;
class ChartController extends Controller{
    public function index($nums = 30){
        echo 'Moudle: Home'.'<br />';
        echo 'Controller: Chart'.'<br />';
        echo 'Action: index'.'<br />';
        
        // 链接地址
        $links = getAddress();        
        $this->assign('address',$links);
        
        // 开奖数据
        $kjh = M('kjh');
        $result = $kjh->limit($nums)->select();
        $result = array_reverse($result);
        
        // 开奖号码经过处理返回表格形式的数组
        $d = numbersFormat($result);

        $this->assign('kjh',$d);
        $this->display();
    }
}