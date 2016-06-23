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

	}
}