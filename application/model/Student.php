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

	/**
	 * 获取要显示的创建时间
	 * @param int $value 时间戳
	 * @return string 转换后的字符串
	 * @author kongrp kongruiping@yunzhiclub.com
	 */
	// public function getCreateTimeAttr($value)
	// {
	// 	return date('Y-m-d',$value);
	// }

	protected $dateFormat = 'Y年m月d日';   //日期格式,eg:2038年01月19日
	//如果下面这种显示的格式不太符合我们的要求，我们还可以对日期显示格式进行覆盖，改为：protected $dateFormat = 'Y年m月d日';
	
	protected $type = [
		'create_time' => 'datetime',   //2038-01-19 08:00:00
	];

	/**
     * 只所以能调用到这个函数，是由一个__get()的魔法函数来完成的。
    */
    // public function Klass()
    // {
    //     return $this->belongsTo('klass');
    // }
    // 
    public function Klass()
    {
        return $this->belongsTo('klass');
    }

}