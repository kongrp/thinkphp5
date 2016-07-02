<?php
namespace app\index\Controller;
use app\model\Klass;
use app\model\Teacher;


class KlassController extends IndexController
{
	public function index()
	{
		//获取查询信息
		$name = input('get.name');
		echo $name;

        $pageSize = 10; // 每页显示5条数据

        $Klass = new Klass; 

        // 调用分页
        $klasses = $Klass->where('name','like','%'.$name.'%')->paginate($pageSize);

        // 向V层传数据
        $this->assign('klasses',$klasses);

        // 取回打包后的数据
        $htmls = $this->fetch();

        // 将数据返回给用户
        return $htmls;	
	}

	public function add()
	{
		//$Teacher
		$teachers = Teacher::all();

		$this->assign('teachers',$teachers);
		return $this->fetch();
	}

	public function save()
	{
		$klass = new Klass();
		$klass->name = input('post.name');
		$klass->teacher_id = input('post.teacher_id/d');
		if(false === $klass->validate()->save())
		{
			return $this->error('数据添加错误'.$klass->getError());
		} else{
			return $this->success('数据添加成功',url('index'));
		}

	}

	public function edit()
	{
		$id = input('get.id/d');

		//获取所有的教师信息
		$teachers = Teacher::all();
		$this->assign('teachers',$teachers);

		$Klass = Klass::get($id);


		if(false === $Klass)
		{
			return $this->error('系统未找到ID为' . $id . '的记录。');
		}

		$this->assign('Klass',$Klass);
		return $this->fetch();
	}

	public function update()
	{
		$id = input('post.id');

		//获取传入的班级信息
		$Klass = Klass::get($id);
		if(false === $Klass)
		{
			return $this->error('系统未找到ID为' . $id . '的记录。');
		}

		//数据更新
		$Klass->name = input('post.name');
		$Klass->teacher_id = input('post.teacher_id');
		if(false === $Klass->validate()->save())
		{
			return $this->error('更新错误' . $Klass->getError());
		} else{
			return $this->success('更新成功','index');
		}
	}

	public function delete()
	{
		echo 'hellodd';
	}
}