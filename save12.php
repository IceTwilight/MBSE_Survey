<?php

echo 'Submisson Successfully! 5 seconds to return to Homepage......';
header("refresh:5;url=/project/0.html");

$all = $_POST;
$output_arry;
$q4 = explode(" ",$all['Question1']);
$q5 = explode(" ",$all['Question2']);
$q6 = explode(" ",$all['Question3']);
$q7 = explode(" ",$all['Question4']);

$fp = fopen('file/1.csv', 'a');  
fputcsv($fp,array($q4[0],$q5[0],$q6[0],$q7[0]));   //fputcsv可以用数组循环的方式进行实现  
fclose($fp);  
?>