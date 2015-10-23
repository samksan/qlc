<?php

/**
 * 获取页面链接地址
 * @return string 链接地址 数组
 */
function getAddress()
{
    return array(
        'index' => U('Home/Index/index', '', false, true),
        'chart' => U('Home/Chart/index', '', false, true),
        'quickstart' => U('Home/Quickstart/index', '', false, true),
        'analysis' => U('Home/Analysis/index', '', false, true),
        'testing' => U('Home/Testing/index', '', false, true)
    );    
}

/**
 * 开奖号码经过处理返回表格形式的数组
 * @param array $numbers 二维数组(从数据库返回的查询结果-开奖号码)
 * array(array('qh','n1','n2','n3','n4','n5','n6','n7'),array(),...)
 */
function numbersFormat($numbers){
    //步骤1 定义替换字符串模板
    //<tr>
    //     <td class="tdbg_1 ">2015-114</td>
    //     <td class="tdbdr"></td>
    //     <td class="tdbg_1 thide"><strong class="rednum">03
    //             04 08 16 20 28 29</strong>+<strong class="bluenum">T</strong></td>
    //     <td></td>
    //     <td></td>
    //     <td></td>
    //     <td hit="" class="tdbg_5"><span class="ball_s3">03</span></td>
    //     <td hit="" class="tdbg_5"><span class="ball_s3">04</span></td>
    //     <td></td>
    //     <td></td>
    //     <td></td>
    //     <td hit="" class="tdbg_5"><span class="ball_s3">08</span></td>
    //     <td></td>
    //     <td></td>
    //     <td></td>
    //     <td></td>
    //     <td></td>
    //     <td></td>
    //     <td></td>
    //     <td class="tdbdr tdbdr_nav"></td>
    //     <td hit="" class="tdbg_5"><span class="ball_s3">16</span></td>
    //     <td></td>
    //     <td></td>
    //     <td></td>
    //     <td hit="" class="tdbg_5"><span class="ball_s11">20</span></td>
    //     <td></td>
    //     <td></td>
    //     <td></td>
    //     <td></td>
    //     <td></td>
    //     <td></td>
    //     <td></td>
    //     <td hit="" class="tdbg_5"><span class="ball_s11">28</span></td>
    //     <td hit="" class="tdbg_5"><span class="ball_s11">29</span></td>
    //     <td></td>
    // </tr>
    $views = array();

    // Step 2 循环数组，组合字符串
    foreach($numbers as $number){

        // 字符串头部
        $temp = '';
        $temp = '<tr>'.'<td>'.$number['qh'].'</td>'.'<td class="tdbg_1 thide"><strong class="rednum">'.$number['n1'].' '.$number['n2'].' '.$number['n3'].' '.$number['n4'].' '.$number['n5'].' '.$number['n6'].' '.$number['n7'].'</strong></td>';

        // 30个单元格
        $n = array();
        for ($i=1; $i < 31; $i++) { 
            $n[$i] = '<td></td>';
        }
        
        // 循环当前期的数组-----第二维度
        foreach ($number as $n07) {
            // 单个的开奖号码排列
            $n[intval($n07)] = '<td hit="" class="tdbg_5"><span class="ball_s11">'.$n07.'</span></td>';
            
        }

        // 组合字符串
        for ($i=1; $i < 31; $i++) { 
            $temp.=$n[$i];
        }
        $temp.='</tr>';

        // 加入数组
        $views[$number['qh']] = $temp;
    }

    // 返回数组
    return $views;
}