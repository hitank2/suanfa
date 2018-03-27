<?php
/**
 * Created by PhpStorm.
 * User: csmall
 * Date: 2018-02-09
 * Time: 9:55
 */

interface Star{
    public function haveSomeThingFun();
    public function eatSomeThing();
}
interface Observable{
    public function addObserver($observer);
    public function notifyObserver($text);
    public function deleteObserver($observer);
}

interface Observer {
    public function update($text);
}
class Fanwei implements Observer{

    public function update($text)
    {
        echo '范伟：范冰冰有动作了，我要赶紧发个微博先'.'<br>';
        $this->sendMicroBlog($text);
        echo '范伟：这么劲爆的新闻应该能上头条吧'.'<br>';
    }

    public function sendMicroBlog($content){
        echo '微博：'.'<br>';
        echo $content.'<br>';
    }
}
class Fanbingbing implements Star,Observable {
    private $isHasFun = false;
    private $isEat = false;
    private $observer = [];
    public function haveSomeThingFun()
    {
        return $this->setHaveFunStatus(true);
    }
    public function addObserver($observer){
        $this->observer []= $observer;
    }
    public function notifyObserver($text)
    {
        foreach ($this->observer as $observer){
            $observer->update($text);
        }
    }
    public function deleteObserver($observer)
    {
        // TODO: Implement deleteObserver() method.
    }

    public function eatSomeThing()
    {
        return $this->setEatStatus(true);
    }
    public function setHaveFunStatus($status){
        $this->notifyObserver('范冰冰去玩了');
        $this->isHasFun = $status;

        return true;
    }
    public function setEatStatus($status){
        $this->notifyObserver('范冰冰去吃东西了');
        $this->isEat = $status;

        return true;
    }
}

$fanbingbing = new Fanbingbing();
$fanwei = new Fanwei();
$fanbingbing->addObserver($fanwei);
$fanbingbing->haveSomeThingFun();
$fanbingbing->eatSomeThing();