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
		//直接调用M层方法，进行登录
		if(Teacher::login(input('post.username'),input('post.password')))
		{
			return $this->success('login success',url('Teacher/index'));
		} else{
			return $this->error('username or password incorrect',url('index'));
		}
	}

	// 注销
    public function logOut()
    {
        if (Teacher::logOUt())
        {
            return $this->success('logout success', url('index'));
        } else {
            return $this->error('logout error', url('index'));
        }
    }
}