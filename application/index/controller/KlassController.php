<?php
namespace app\index\Controller;
use app\model\Klass;


class KlassController extends IndexController
{
	public function index()
	{
		//获取查询信息
		$name = input('get.name');
		echo $name;

        $pageSize = 2; // 每页显示5条数据

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
		//$klasses = Klass::get($id);

		//$this->assign('klasses',$klasses);
		return $this->fetch();
	}

	public function save()
	{
		var_dump(input('post.'));
	}
}