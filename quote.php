<?php
/**
 *
 * 第一次调用为值传递调用，被调函数的形式参数作为被调函数的局部变量处理，即在堆栈中开辟了内存空间以存放由主调函数放进来的实参的值，
 * 从而成为了实参的一个副本。值传递的特点是被调函数对形式参数的任何操作都是作为局部变量进行
 * 不会影响主调函数的实参变量的值。
 *
 * Created by PhpStorm.
 * User: csmall
 * Date: 2018-03-14
 * Time: 9:28
 */
$a = 1;
func($a);
echo $a.'<br>';

class A{
    public $a = 1;
}
$obj = new A();
func($obj->a);
echo $obj->a.'<br>';


function func($a){
    $a = 100;
    echo $a.'<br>';
}


//class Test{
//    public $a=1;
//}
//$m = new Test();
//$n = $m;//引用赋值
//$m->a = 2;//修改m，n也随之改变
//echo $n->a;//输出2，浅拷贝
//echo PHP_EOL;