<?php

echo '提交成功!<br>三秒后自动跳到指定页面......';
header("refresh:0;url=/project/6.html");

$all = $_POST;
var_dump( $all );
$output_arry;
$q14 = explode(" ",$all['Question14']);
$q15 = explode(" ",$all['Question15']);

$fp = fopen('file/1.csv', 'a');  
fputcsv($fp,array($q14[0],$q15[0] ));   //fputcsv可以用数组循环的方式进行实现  
fclose($fp);  
?>