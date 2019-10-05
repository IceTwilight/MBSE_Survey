<?php

echo '提交成功!<br>三秒后自动跳到指定页面......';
header("refresh:0;url=/project/5.html");

$all = $_POST;
var_dump( $all );
$output_arry;
$q11 = explode(" ",$all['Question11']);
$q12 = explode(" ",$all['Question12']);
$q13 = explode(" ",$all['Question13']);

$fp = fopen('file/1.csv', 'a');  
fputcsv($fp,array($q11[0],$q12[0],$q13[0]));   //fputcsv可以用数组循环的方式进行实现  
fclose($fp);  
?>