<!doctype html>
<html lang="en">
<head>
<meta charset="UTF-8" />
<title>七乐彩开奖号码</title>
<style type="text/css">
span {
	text-align: center;
}
</style>
</head>
<body>
<?php
include 'GetDataCp360.class.php';
$test = new GetDataCp360();
$result = $test->get_data_from_cp360();

// 循环输出二维数组
foreach ($result as $key => $value) {
    echo '<span>';
    echo '期号：';
    foreach ($value as $v) {
        echo $v . ' ';
    }
    echo '</span>';
    echo '<br />';
}
?>
</body>
</html>



