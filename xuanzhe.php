<?php
//第2题：
$arr = [1,2,3];
foreach($arr as &$v) {
    //nothing todo.
}
echo $v;
var_dump($arr);
foreach($arr as $v) {
    //nothing todo.
}
var_export($arr);
//output:array(0=>1,1=>2,2=>2)，你的答案对了吗？为什么
?>
