<?php

echo '提交成功!<br>三秒后自动跳到指定页面......';
header("refresh:0;url=/project/7.html");

$all = $_POST;
var_dump( $all );
$output_arry;
$q16 = $all['Question16'];
$q17 = $all['Question17'];
$q18 = $all['Question18'];

$fp = fopen('file/1.csv', 'a');  
fputcsv($fp,array($q16[0],$q17[0],$q18[0]));   //fputcsv可以用数组循环的方式进行实现  
fclose($fp);  
?>