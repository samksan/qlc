<?php

/**
 * 获取页面链接地址
 * @return string 链接地址 数组
 */
function getAddress()
{
    return array(
        'index' => U('Home/Index/index', '', true, true),
        'chart' => U('Home/Chart/index', '', true, true),
        'quickstart' => U('Home/Quickstart/index', '', true, true),
        'analysis' => U('Home/Analysis/index', '', true, true),
        'testing' => U('Home/Testing/index', '', true, true)
    );    
}

/**
 * 开奖号码经过处理返回表格形式的数组
 * @param array $numbers 二维数组(从数据库返回的查询结果-开奖号码)
 * array(array('qh','n1','n2','n3','n4','n5','n6','n7'),array(),...)
 */
function numbersFormat($numbers){
    
}