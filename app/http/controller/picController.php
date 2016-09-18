<?php
namespace app\http\controller;
class picController{
	function getPic(){
		$xiaohua=new \app\model\Xiaohua;
		return $xiaohua->getPic();
	}
	

}
