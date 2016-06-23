<?php
namespace app\index\controller;
use app\model\Teacher as Teacher1;   //引用教师模型
/**
 * 教师管理
 */
class Teacher
{	
	public function index()
	{
		$teacher = new Teacher1;
		dump($teacher);

	}
}