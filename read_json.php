<?php
/**
* 2016-03-10
* astar
* http://www.astarblog.cn
* http://www.github.com/ss7247
*/
header('Content-type:text/html;charset=utf-8');
// ���json ��ʽ������
$a = './data_bank_list.json';
$json_string = file_get_contents($a);

// ��JSON�ַ���ת��PHP����
$data = json_decode($json_string, true);
// �����������
 print_r($data);
 exit;