<?php
namespace app\index\controller;
use app\model\Course;
use app\model\Klass;
/**
 * 课程管理
 * @author kongrp <kongruiping@yunzhi.com>
 */
class CourseController extends IndexController
{
	public function index()
	{
		//测试代码
	}
	
	//要想在V层中输出班级列表，最简单的方法就是在C中获取后传入V层。
	public function add()
	{
		$klasses = Klass::all();
        $this->assign('klasses', $klasses);

        return $this->fetch();
	}

	public function save()
	{

		$Course = new Course();
		$Course->name = input('post.name');
		if(false === $Course->save())
		{
			return $this->error('保存错误' . $Course->getError());
		} else {
			return $this->success('保存成功',url('index'));
		}

		
	}
}
