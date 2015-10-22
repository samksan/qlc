<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    /**
     * 主页
     * @return null null
     */
    public function index(){
        echo 'Moudle: Home'.'<br />';
        echo 'Controller: Index'.'<br />';
        echo 'Action: index'.'<br />';
        
        $links = getAddress();
        
        $this->assign('address',$links);
        $this->display();
    }            
    
    /**
     * 更新开奖号码
     * 从360彩票网获取数据，把数据替换到表 think.qlc_kjh 的数据
     * 利用的class在 \Org\Util\cp360\ 中
     * @return null null
     */
    public function updateNumbers(){
    
        
        $tests = new \Org\Util\cp360\GetDataCp360();
        $result = $tests->get_data_from_cp360();    
        
        // 循环输出二维数组 -> 到数据表中 == think.qlc_kjh    
        // 首先清空数据库        
        $kjh = M('kjh');
        $kjh->where('qh>0')->delete();        
        
        foreach ($result as $value) {
            $data['qh']=$value[0];
            $data['n1']=$value[1];
            $data['n2']=$value[2];
            $data['n3']=$value[3];
            $data['n4']=$value[4];
            $data['n5']=$value[5];
            $data['n6']=$value[6];
            $data['n7']=$value[7];
            $kjh->add($data);
        }
        
        // 数据表的长度
        $num = $kjh->count();
        $first = $kjh->min('qh');
        $last = $kjh->max('qh');
        $lasts = $kjh->where("qh=$last")->select();
        echo '已成功写入数据库：'.$num.'期开奖数据'.'<br />';
        echo '从'.$first.'到'.$last.'<br />';
        echo '最后一期的数据是：';      
        foreach ($lasts as $v){
            foreach ($v as $a){
                echo $a.' ';
            }
        }
            
    }
    
}