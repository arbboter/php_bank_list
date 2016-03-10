<?php
/**
* 2016-03-10
* astar
* http://www.astarblog.cn
* http://www.github.com/ss7247
*/
header('Content-type:text/html;charset=utf-8');
// 获得json 格式的数据
$a = './data_bank_list.json';
$json_string = file_get_contents($a);

// 把JSON字符串转成PHP数组
$data = json_decode($json_string, true);
// 打出所有数组
 print_r($data);
 exit;