<?php
/**
* 2016-03-10
* astar
* http://www.astarblog.cn
* http://www.github.com/ss7247
*/
header('Content-type:text/html;charset=utf-8');
require_once('data_bank_list.php');

/**
* 获取银行卡的类型
*
*@notice 观察发现银行卡是通过前几位来判断是什么类型
*		 前几位可能是(3,4,5,6,8)
*		 所以处理的时候逐步处理
*
*@param $card 银行卡账号
*@param $bankList 引用银行卡列表
*@return booler
*/
function bankInfo($card,$bankList)
{
	$bank_data_num = array(3,4,5,6,8);
	$bank_num = count($bank_data_num);
	
	for($i=0;$i<$bank_num;$i++){
		$card_data = substr($card, 0, $bank_data_num[$i]);
		if (isset($bankList[$card_data])) {
			echo $bankList[$card_data];
			return;
		}
	}
    echo '该卡号信息暂未录入';
}

bankInfo('6228481552887300000',$bankList);