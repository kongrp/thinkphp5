<?php

header("Content-Type:text/html;charset=utf-8");
class Test
{    
    public function  __construct()
    {
        echo 'construct';
    }

    public function sayHello()
    {
        echo 'hello';
    }
}

$Test = new Test();

echo '<br />';

$Test->sayHello();