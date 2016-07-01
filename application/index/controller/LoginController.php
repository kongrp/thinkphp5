<?php
namespace app\index\Controller;
use think\Controller;
use app\model\Teacher;   //引用教师模型
/**
 * 用户登录
 */
class LoginController extends Controller
{	
	//用户登录表单
	public function index()
	{
		//显示用户登录表单
		return $this->fetch();
	}

	//处理用户提交的登录数据
	public function login()
	{
		var_dump(input('post.'));
		// 验证用户名是否存在
		$map = array('username'=>input('post.username'));
		$Teacher = Teacher::get($map);

		//像我以前说过的，我们每调用一个方法，都要非常清晰的知道它返回值类型是什么。
        // $Teacher要么是一个对象，要么是false。
		if(false !== $Teacher)
		{
			// 验证密码是否正确
			if($Teacher->getData('password') !== input('post.password'))
			{
				return $this->error('password incrrect',url(index));
			} else{
				// 用户名密码正确，将teacherId存session
				session('teacherId',$Teacher->getData('id'));
				return $this->success('login success',url('teacher/index'));
			}
		} else{
			// 用户名密码错误，跳转到登录界面
			return $this->error('username not exist',url('index'));
		} 
	}
}