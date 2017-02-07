<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 抽象一个类
 * class 类名{} 类名首字母大写
 * 属性：轮胎 玻璃 壳 防震器  成员属性
 * 方法：跑 车震 飚车 接客    成员方法
 * 在成员属性和成员方法里一定要添加一个修饰符就是public
 * @author zhangweipeng <1131373886@qq.com>
 */ 
class Car{
	public $name = "宝马";
	public $age = "30";
	
	public function pao(){
		return "正在跑……";
	}
	public function biaoche(){
		return "正在飚……";
	}
}
class Person{
	public $yanjin = "眼睛";
	public $bizi = "鼻子";
	public $erduo = "耳朵";
	public $zui = "嘴";
	public function eat(){
		return "正在吃饭……";
	}
	public function shui(){
		return "正在睡觉……";
	}
	public function dadoudou(){
		return "正在打豆豆……";
	}
}
$obj = new Person();
var_dump($obj);
$obj2 = $obj;
var_dump($obj2);
