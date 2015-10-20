<?php
namespace Org\Util\cp360;
/**
 * 从360彩票网站获取七乐彩开奖数据的最后500期结果
 * get start:
 * $test = new GetDataCp360();
 * $test->get_data_from_cp360();
 */
class GetDataCp360
{
    // 存储结果的数组
    private $numbers = array();

    /**
     * 从360彩票网站获取七乐彩开奖数据的最后500期结果
     */
    function get_data_from_cp360()
    {
        include 'Snoopy.class.php';
        $str = "http://chart.cp.360.cn/zst/getchartdata?lotId=220028&chartType=zhfb&spanType=0&span=500";
        $str115 = "http://chart.cp.360.cn/zst/getchartdata?lotId=166907&chartType=rxfb&spanType=0&span=300";
        
        // 创建类
        $snoopy = new \Org\Util\cp360\Snoopy();
        
        // 得到网页内容
        $snoopy->fetch($str);
        
        // 取出网页内容到变量中
        $result = $snoopy->results;
        
        // 把结果转换成数组
        $arr = explode('+', $result);        
        
        // 遍历数组，并截取需要的部分
        foreach ($arr as $value) {
            
            // 截取字符串功能
            $pattern = '/\d\d\d\d-\d\d\d/';

            if (preg_match($pattern, $value)) {
                $temps = array();
                $len = strrpos($value, '201');
                $temps['qh'] = substr($value, $len, 4) . substr($value, $len + 5, 3);
                $temps['n1'] = substr($value, $len + 79, 2);
                $temps['n2'] = substr($value, $len + 82, 2);
                $temps['n3'] = substr($value, $len + 85, 2);
                $temps['n4'] = substr($value, $len + 88, 2);
                $temps['n5'] = substr($value, $len + 91, 2);
                $temps['n6'] = substr($value, $len + 94, 2);
                $temps['n7'] = substr($value, $len + 97, 2);  

                // 过滤不合格的元素，并保存数据到类的成员中            
                // if (preg_match('/[a-z]/', $temps['n1']) or
                //     preg_match('/[a-z]/', $temps['n2']) or
                //     preg_match('/[a-z]/', $temps['n3']) or
                //     preg_match('/[a-z]/', $temps['n4']) or
                //     preg_match('/[a-z]/', $temps['n5']) or
                //     preg_match('/[a-z]/', $temps['n6']) or
                //     preg_match('/[a-z]/', $temps['n7'])
                //  ) {
                //     continue;                    
                // }else{
                //     // 把结果数组组合成数组
                //     $this->numbers[$temps['qh']]=array(
                //         $temps['qh'],
                //         $temps['n1'],
                //         $temps['n2'],
                //         $temps['n3'],
                //         $temps['n4'],
                //         $temps['n5'],
                //         $temps['n6'],
                //         $temps['n7'],
                //     );
                // }
                if(substr($value,$len + 5,3)<156){
                    $this->numbers[$temps['qh']]=array(
                        $temps['qh'],
                        $temps['n1'],
                        $temps['n2'],
                        $temps['n3'],
                        $temps['n4'],
                        $temps['n5'],
                        $temps['n6'],
                        $temps['n7'],
                    );
                }
                
            }
        }        

        //返回结果数组
        return $this->numbers;
    }   
}