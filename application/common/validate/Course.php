<?php
namespace app\common\validate;
use think\Validate;

class Course
{
	protected $rule = [
		'name' => 'require',
	];
}