<?php
namespace app\index\controller;

class Index
{	
	//我的方法名叫index
	public function index()
	{
		return 'Hello World!';
	}

	//test方法,输出hello yunzhi
	//localhost/public/index/Index/test
	public function test()
	{
		return 'hello yunzhi';
	}
}
