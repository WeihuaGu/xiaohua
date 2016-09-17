<?php
namespace app\http\controller;
class indexController{
	function getRandomTest(){
		$xiaohua=new \app\model\Xiaohua;
		return $xiaohua->getRandom();
	}
	

}
