<?php

header("Content-Type:text/html;charset=utf-8");

class Father
{
    public function __construct()
    {
        echo 'Father construct';
    }
}

class Son extends Father
{
    public function __construct()
    {
        // 先执行父类构造函数
        //parent::__construct();

        echo 'Son construct';
        // 后执行父类构造函数
        parent::__construct();
    }
}

$br = '<br />';
$Father = new Father;

echo $br;

$Son = new Son;
