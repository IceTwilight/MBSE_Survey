<?php

echo '提交成功!<br>三秒后自动跳到指定页面......';
header("refresh:0;url=/project/2.html");

$all = $_POST;
var_dump( $all );
$output_arry;
$q1 = explode(" ",$all['Question1']);
$q2 = explode(" ",$all['Question2']);
$q3 = explode(" ",$all['Question3']);
$fp = fopen('file/1.csv', 'a');  
fputcsv($fp,array($q1[0],$q2[0],$q3[0]));   //fputcsv可以用数组循环的方式进行实现  
fclose($fp);  
?>