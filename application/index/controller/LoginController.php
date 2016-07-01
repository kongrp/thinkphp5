<?php
namespace app\index\Controller;
use think\Controller;

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
		// 验证密码是否正确
		// 用户名密码正确 ，将teacherId 存session
		// 用户名密码错误，跳转到登录界面 
	}
}