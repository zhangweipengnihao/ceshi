<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 封装的操作
 * @author zhangweipeng <1131373886@qq.com>
 */
//抽象一个鸟类
class Bird{
	//成员属性
	private $name = "百灵";
	private $age = 30;
	private $sex = "公";
	//成员方法
	public function fly(){
		return "正在飞……";
	}
	//访问私有的成员属性
	/* public function getName(){
		return $this -> name;
	} */
	//修改私有成员属性的值
	/* public function setName($name){
		$this ->name = $name;
	} */
	//取得私有成员属性
	public function __get($name){
		//可以添加限制访问的条件
		if($name == "name"){
			return $this -> $name;
		}
	}
	//修改私有成员属性的值
	public function __set($name,$value){
		//可以添加限制访问的条件
		if($name == "name"){
			$this -> $name = $value;
		}
	}
	//判断一个属性是否存在
	public function __isset($k){
		return isset($this ->$k);
	}
	//注销成员属性
	public function __unset($k){
		unset($this -> $k);
	}
}
//实例化一个对象
$bailing = new Bird();
//	$bailing -> setName("点颏");
//	echo $bailing -> getName();
//	$bailing -> age = 50;
//	echo $bailing -> age;
//	echo $bailing -> name;
//	$bailing -> name = "黄雀";
//	unset ($bailing -> name);
//	echo $bailing -> name;
var_dump(isset($bailing -> name));
//	echo $bailing -> name;