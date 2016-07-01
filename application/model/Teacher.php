<?php
namespace app\model;
use think\Model;    // 使用前进行声明
/**
* 用户登录
* @param  string $username 用户名
* @param  string $password 密码
* @return bool  成功返回true，失败返回false。
*/
class Teacher extends Model
{
	static public function login($username,$password)
	{
		return true;
	}
}