<?php
namespace app\model;
use think\Model;

class Student extends Model
{
	/**
	 * 输出性别的属性
	 * @return string 0男 1女
	 * @author kongrp <kongruiping@yunzhiclub.com>
	 */
	public function getSexAttr($value)
	{
		$status = array('0'=>'男', '1'=>'女');
		$sex = $status[$value];
		if(isset($sex))
		{
			return $sex;
		} else{
			return $status[0];
		}
	}
}