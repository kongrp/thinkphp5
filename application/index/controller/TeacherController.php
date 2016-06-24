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

	//插入数据
	public function insert()
	{
		//新建测试数据
		$teacher = []; //等同于$teacher = array();
		$teacher['name'] = '王五';
		$teacher['username'] = 'wangwu';
		$teacher['sex'] = '1';
		$teacher['email'] = 'wangwu@yunzhi.club';

		//引用teacher数据表对应的模型
		$Teacher = new Teacher();		

		//向teacher表中插入数据并判断是否插入成功
		$state = $Teacher->data($teacher)->save();
		return $teacher->data('name').'成功增加到数据库中';
	}

	//新增数据
	public function add()
	{
		$htmls = $this->fetch();
		return $htmls;
	}
}