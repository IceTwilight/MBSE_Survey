<?php

echo '提交成功!<br>三秒后自动跳到指定页面......';
header("refresh:0;url=/project/3.html");

$all = $_POST;
var_dump( $all );
$output_arry;
$q4 = explode(" ",$all['Question4']);
$q5 = explode(" ",$all['Question5']);
$q6 = explode(" ",$all['Question6']);
$q7 = explode(" ",$all['Question7']);

$fp = fopen('file/1.csv', 'a');  
fputcsv($fp,array($q4[0],$q5[0],$q6[0],$q7[0]));   //fputcsv可以用数组循环的方式进行实现  
fclose($fp);  
?>