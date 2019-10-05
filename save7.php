<?php

echo '提交成功!<br>三秒后自动跳到指定页面......';
header("refresh:0;url=/project/8.html");

$all = $_POST;
var_dump( $all );
$output_arry;
$q19 = explode(" ",$all['Question19']);
$q20 = explode(" ",$all['Question20']);
$q21 = explode(" ",$all['Question21']);
$q22 = explode(" ",$all['Question22']);

$fp = fopen('file/1.csv', 'a');  
fputcsv($fp,array($q19[0],$q20[0],$q21[0],$q22[0]));   //fputcsv可以用数组循环的方式进行实现  
fclose($fp);  
?>