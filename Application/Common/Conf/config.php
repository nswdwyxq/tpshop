<?php
return array(
	//'配置项'=>'配置值'
	
	//设置URL为重写模式
	'URL_MODEL' =>  2,

	//设置默认模块（分组）
	'DEFAULT_MODULE' => 'Home',

	//允许访问的模块
	'MODULE_ALLOW_LIST' => array('Home','Admin'),

	//模板样式文件路径
	'TMPL_PARSE_STRING' => array(
		'__PUBLIC_ADMIN__' => '/Public/Admin',
		'__PUBLIC_HOME__' => '/Public/Home'
		),
);