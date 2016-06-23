<?php
namespace app\index\controller;
use think\Db; //引用数据库操作类

class IndexController
{	
	//我的方法名叫index
	public function index()
	{
		var_dump(Db::name('teacher')->find()); //获取数据表中第一条数据

	}

	//test方法,输出hello yunzhi
	//localhost/public/index/Index/test
	public function test()
	{
		return 'hello yunzhi';
	}
}
