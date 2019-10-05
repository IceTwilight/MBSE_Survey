<?php

echo '提交成功!<br>三秒后自动跳到指定页面......';
header("refresh:0;url=/project/4.html");

$all = $_POST;
var_dump( $all );
$output_arry;
$q8 = explode(" ",$all['Question8']);
$q9 = explode(" ",$all['Question9']);
$q10 = explode(" ",$all['Question10']);
$fp = fopen('file/1.csv', 'a');  
fputcsv($fp,array($q8[0],$q9[0],$q10[0]));   //fputcsv可以用数组循环的方式进行实现  
fclose($fp);  
?>