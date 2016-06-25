<?php
namespace app\common\validate;
use think\Validate;	//引用内置验证类

class Teacher extends Validate
{
	// 当前验证的规则
    protected $rule = [
    	'email' => 'email',
    	'name'  => 'require|length:2,25',
    	'username'  => 'require|unique:teacher|length:4,25',
    	'sex'  => 'in:0,1',

    	    ];
    // 验证提示信息
    protected $message = [
    	'email' => '邮箱格式有误',
    	'name.require'  => 'name不能为空',
    ];
}