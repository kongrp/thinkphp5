<?php
namespace app\index\controller;
use think\Controller;  //用于与V层进行数据传递
use app\model\Teacher;   //引用教师模型
/**
 * 教师管理，继承think\Controller后，就可以利用V层对数据进行打包了。
 */
class TeacherController extends Controller
{	
	public function index()
	{
		// $Teacher 首写字大写，说明它是一个对象, 更确切一些说明这是基于Teacher这个模型被我们手工实例化的，如果存在teacher数据表的话，它对应teacher数据表
		$Teacher = new Teacher;

		 // $teachers 以s结尾，表示它是一个数组，数据中的每一项都是一个对象，这个对象基于Teahcer这个模型。
		$teachers = $Teacher->select();

		//向V层传递数据
		$this->assign('teachers',$teachers);

		//取回V层打包的数据
		$htmls = $this->fetch();

		//将数据返回给用户
		return $htmls;
	}

	public function insert()
	{
		//接收传入数据
		$teacher = input('post.');
		$teacher['create_time'] = time();  //加入时间戳
		
		//引用Teacher模型
		$Teacher = new Teacher();

		//插入数据
		$Teacher->data($teacher)->save();

		//反馈结果
		return $teacher['name'].'新增成功';
	}

	public function add()
	{
		$htmls = $this->fetch();
		return $htmls;
	}
}