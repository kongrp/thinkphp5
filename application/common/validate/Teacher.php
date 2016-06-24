<?php
namespace app\common\validate;
use think\Validate;	//引用内置验证类

class Teacher extends Validate
{
	// 当前验证的规则
    protected $rule = [
    	'email' => 'email',
    ];
    // 验证提示信息
    protected $message = [
    	'email' => '邮箱格式有误',
    ];
}