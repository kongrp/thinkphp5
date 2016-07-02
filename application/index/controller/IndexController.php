<?php
namespace app\index\controller;
use think\Controller;
use app\model\Teacher; //引用数据库操作类

class IndexController extends Controller
{	
	//新建构造函数，并增加“验证用户是否登录”语句。
	//除了可以测试index方法外，还可以测试add、delete等所有TeacherController中包括的方法。
	public function __construct()
	{
		parent::__construct();

		//验证用户是否登录
		if(!Teacher::isLogin())
		{
			return $this->error('plz login first',url('Login/index'));
		}
	}

	//我的方法名叫index
	public function index()
	{
		var_dump(Db::name('teacher')->find()); //获取数据表中第一条数据

	}

	//test方法,输出hello yunzhi
	//localhost/public/index/Index/test
	public function test()
	{
		return '好的hello yunzhi';
	}
}
