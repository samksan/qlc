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