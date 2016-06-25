<?php
namespace app\index\controller;
use think\Controller;

class TestController extends Controller
{
	//测试规则是否符合实际
	public function index()
    {
        $data = array();
        $data['username'] = '1';
        $data['name'] = '11';
        $data['sex'] = '1';
        $data['email'] = 'hello@hello.com';
        var_dump($this->validate($data, 'Teacher'));
    }

    //测试用户名是否存在
    public function test()
    {
        $data = array();
        $data['username'] = '1';
        $data['name'] = '1';
        $data['sex'] = '1';
        $data['email'] = 'hello@hello.com';
        var_dump($this->validate($data, 'Teacher'));
    }

    //测试用户名长度是否符合实际
    public function test1()
    {
        $data = array();
        $data['username'] = 'ce';
        $data['name'] = '1';
        $data['sex'] = '1';
        $data['email'] = 'hello@hello.com';
        var_dump($this->validate($data, 'Teacher'));
    }
}