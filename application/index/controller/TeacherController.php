<?php
namespace app\index\controller;
use app\model\Teacher;   //引用教师模型
/**
 * 教师管理
 */
class TeacherController
{	
	public function index()
	{
		$Teacher = new Teacher;
		$teachers = $Teacher->select();

		//获取第0个数据
		$teacher = $teachers[0];

		//调用上述对象的getData()方法，并传参
		var_dump($teacher->getData('name'));

		//并增加另外两个直接显示数据的方式
		echo $teacher->getData('name');
		return $teacher->getData('name');


	}
}