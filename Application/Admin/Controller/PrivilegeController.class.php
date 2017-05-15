<?php
namespace Admin\Controller;
use Think\Controller;
class PrivilegeController extends Controller{
	public function login(){
		$this->display();
	}

	public function getVerify(){
		$Verify = new \Think\Verify();
		// $Verify->fontttf = '5.ttf';
		$Verify->useZh = true; 
		// $Verify->useImgBg = true;

		$Verify->entry();
	}
}