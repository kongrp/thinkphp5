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
		// 验证用户是否存在
		$map = array('username'=>$username);
		$Teacher = self::get($map); 

		if(false !== $Teacher)
		{
		// 验证密码是否正确
		if ($Teacher->checkPassword($password))
            {
                // 登录
                session('teacherId', $Teacher->getData('id'));
                return true;
            }
        }

        return false;
    }

    /**
     * 验证密码是否正确
     * @param  string $password 密码
     * @return bool           
     */
    public function checkPassword($password)
    {
       if ($this->getData('password') === $password)
        {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 注销
     * @return bool  成功true，失败false。
     * @author panjie
     */
    static public function logOut()
    {
        // 销毁session中数据
        session('teacherId', null);
        return true;
    }

    
}