<?php
namespace app\index\controller;
use app\model\Teacher;   //引用教师模型
/**
 * 教师管理
 */
class TeacherController
{	
	public function index()
	{
		$JiaoShiBiao = new Teacher;
        $SuoYouJiaoShi = $JiaoShiBiao->select();

        // 获取第0个数据
        $jiaoShiZhangSan = $SuoYouJiaoShi[0];

        // 调用上述对象的getData()方法
        echo '教师姓名' . $jiaoShiZhangSan->getData('name') . '<br />';
        return '重复一遍:教师姓名' . $jiaoShiZhangSan->getData('name');

	}
}