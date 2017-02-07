<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 抽象一个成员
 * 调用成员属性和成员方法
 * 修改成员属性的值
 * 调用成员方法添加参数
 * @author zhangweipeng <1131373886@qq.com>
 */
class Car{
	public $name = "奔驰";
	public $age = "30";
	public function pao($s){
		return $s."正在跑……";
	}
	public function biao(){
		return "正在飚……";
	}
}
$obj = new Car();
echo $obj -> name;
$obj -> name = "凯迪拉克";
echo "<br />";
echo $obj -> name;
echo "<br />";
echo $obj -> pao("张三");