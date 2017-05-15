<?php 
namespace Home\Controller;
use Think\Controller;
class EmptyController extends Controller{
	public function _empty(){
		echo "罗云臻是SB";
	}

	public function test(){
		$this->_empty();
	}
}