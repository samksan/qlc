<?php
namespace Home\Controller;
use Think\Controller;
class ChartController extends Controller{
    public function index(){
        echo 'Moudle: Home'.'<br />';
        echo 'Controller: Chart'.'<br />';
        echo 'Action: index'.'<br />';       
        
        $nums = I('numbers');
        if(I('numbers')<=0){
            $nums = 15;
        }
        // 链接地址
        $links = getAddress();        
        $this->assign('address',$links);
        
        // 开奖数据
        $kjh = M('kjh');
        $result = $kjh->limit($nums)->order('qh DESC')->select();
        $result = array_reverse($result);
        
        // 开奖号码经过处理返回表格形式的数组
        $d = numbersFormat($result);

        $this->assign('kjh',$d);
        $this->display();
    }
}