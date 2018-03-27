<?php
/**
 * Created by PhpStorm.
 * User: csmall
 * Date: 2018-03-14
 * Time: 9:28
 */
$a='a';
$a++;
echo $a;
exit;
class CateData implements Iterator {
    private $_data	=	array();
    private $_key	=	'a';
    public function __construct($data){
        $this->_data	=	$data;
    }
    public function current()
    {
        return $this->_data[$this->_key];
    }
    public function valid()
    {
        return isset($this->_data[$this->_key]);
    }

    public function next()
    {
        $this->_key++;
    }
    public function key()
    {
        return $this->_key;
    }
    public function rewind()
    {
        $this->_key = 'a';
    }

}
$data   =   array(
    'a'=>'分类1',
    'b'=>'分类2',
    'c'=>'分类3',
    'd'=>'分类4',
);
$cate	=	new CateData($data);
foreach($cate as $key => $val){
    echo "$key : ". $val;
}
