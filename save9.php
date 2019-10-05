<?php

echo '提交成功!<br>三秒后自动跳到指定页面......';
header("refresh:0;url=/project/10.html");

$all = $_POST;
var_dump( $all );
$output_arry;
$q27 = explode(" ",$all['Question27']);
$q28 = explode(" ",$all['Question28']);
$q29 = explode(" ",$all['Question29']);
$fp = fopen('file/1.csv', 'a');  
fputcsv($fp,array($q27[0],$q28[0],$q30[0]));   //fputcsv可以用数组循环的方式进行实现  
fclose($fp);  
?>