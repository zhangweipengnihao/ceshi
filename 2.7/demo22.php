<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 抽象类的操作
 * @author zhangweipeng <1131373886@qq.com>
 */
abstract class Bird{
	//成员属性
	public $name = "小黑白";
	//成员方法
	public function fly(){
		return "正在飞……";
	}
	//抽象方法，它是没有方法体的，必须在子类中重写这个方法
	abstract function chi();
}
class Bailing extends Bird{
	//在子类中必须进行重写
	public function chi(){
		
	}
}
//实例化
$bailing = new Bailing();
echo $bailing -> name;