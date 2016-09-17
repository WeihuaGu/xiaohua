<?php
namespace app\http\controller;
class testController{
	function getTest(){
		$testmodel=new \app\model\testmodel;
		return $testmodel->getTest();
	}
	function testMember(){
		$testmodel=new \app\model\sns\user\users;
		return $testmodel->addUser("ni","wo","1992","wlwlefj@163.com","133568978",1);
	}

}
