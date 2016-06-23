<?php
namespace app\index\controller;
use think\Db;  //引用数据库操作类
/**
 * 教师管理
 */
class Teacher
{	
	//良好的注释习惯会使我们的编码事半功倍。
	public function index()
	{
		//获取教师表中所有数据
		$teachers = Db::name('teacher')->select();

		//查看获取的数据
		var_dump($teachers);

		//输出$teachers中的0号元素
		var_dump($teachers[0]);

		//输出teachers中0号元素中的name值
		var_dump($teachers[0]['name']);

	}
}