<?php
header("Content-Type:text/html;charset=utf-8");

class Test
{
    private $data = array();

    public function __get($name)
    {
        // 较验在$this->data中是否存在这个健值。
        // 如果存在，即返回，如果不存在，则提示该字段不存在。
        if(array_key_exists($name, $this->data))
        {
            return $this->data[$name];
        } else {
            return '字段' . $name . '不存在';
        }
    }

    public function __set($name, $value)
    {
        echo '$name is ' . $name . ', $value is ' . $value . '<br />';
        $this->data[$name] = $value;
    }
}

    $Test = new Test();
    $Test->name = '李四';
    $Test->sex = '1';
    echo $Test->name . '<br />';
    echo $Test->sex . '<br />';
    
    //输出并不存在的hello字段
    echo $Test->hello;



