<?php

header("Content-Type:text/html;charset=utf-8");

class Test
{
    private $hi ='hello yunzhi';
    //历史处理方法
    // public function getHi()
    // {
    //     return $this->hi;
    // }

    //采用魔法函数
    public function __get($name)
    {
        echo $name . '<br />';
        echo $this->hi;
    }
}

$Test = new Test();
echo $Test->hi;
