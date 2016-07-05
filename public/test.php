<?php

header("Content-Type:text/html;charset=utf-8");

class Test
{
    private $hi ='hi';
    public function getHi()
    {
        return $this->hi;
    }

}

$Test = new Test();
echo $Test->getHi();
