<?php

echo '提交成功!<br>三秒后自动跳到指定页面......';
header("refresh:0;url=/project/9.html");

$all = $_POST;
var_dump( $all );
$output_arry;
$q23 = explode(" ",$all['Question23']);
$q24 = explode(" ",$all['Question24']);
$q25 = explode(" ",$all['Question25']);
$q26 = explode(" ",$all['Question26']);

$fp = fopen('file/1.csv', 'a');  
fputcsv($fp,array($q23[0],$q24[0],$q25[0],$q26[0]));   //fputcsv可以用数组循环的方式进行实现  
fclose($fp);  
?>