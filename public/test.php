<?php
header("Content-Type:text/html;charset=utf-8");
class Test
{    
    public function sayHello()
    {
        echo "hello<br />";
        
    }

    public function sayOther($words)
    {
        echo "$words<br />";
    }

    public function functionNotExist()
    {
        echo '您要调用的方法不存在<br />';
    }

    public function __call($method,$args)
    {
        
        echo "您要调用的方法是:$method<br/>";
        echo "传入的参数是：";
        var_dump($args);
        $this->functionNotExist($args);
    }


}

$Test = new Test();

//测试代码
$Test->sayHello();  //输出结果为：hello
$Test->sayOther('helloyunzhi');   //输出结果为：helloyunzhi

$Test->ssd('hi Yunzhier, how a u'); //ssd方法并不存在，是我瞎写的，当然了，你也可以瞎写成别的方法。
$Test->myz('hi Yunzhier', 'how a u');