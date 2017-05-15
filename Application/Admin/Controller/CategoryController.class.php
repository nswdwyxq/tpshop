<?php 
namespace Admin\Controller;
use Think\Controller;
class CategoryController extends Controller{
	public function cateadd(){
		if(IS_GET){
			$this->display();
		}
	}
}