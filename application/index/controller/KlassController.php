<?php
namespace app\index\Controller;
use app\model\Klass;


class KlassController extends IndexController
{
	public function index()
	{
		$klasses = Klass::paginate(2);
		$this->assign('klasses',$klasses);
		return $this->fetch();
	}
}