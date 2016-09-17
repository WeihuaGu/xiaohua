<?php
namespace app\http\controller;
class indexController{
	function getNewTest(){
		$xiaohua=new \app\model\Xiaohua;
		return $xiaohua->getNew();
	}
	

}
