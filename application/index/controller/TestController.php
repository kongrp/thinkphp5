<?php
namespace app\index\controller;
use think\Controller;

class TestController extends Controller
{
	public function index()
    {
        $data = array();
        $data['username'] = '';
        $data['name'] = '11';
        $data['sex'] = '1';
        $data['email'] = 'hello@hello.com';
        var_dump($this->validate($data, 'Teacher'));
    }
}