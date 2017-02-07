<?php
header("Content-Type:text/html;charset=utf-8");
/**
 * 抽象一个类
 * 实例化一个类
 * 调用类中的成员属和成员方法
 * @author zhangweipeng <1131373886@qq.com>
 */
class Person{
	//成员属性
	public $yanjin = "眼睛";
	public $erduo = "耳朵";
	public $bizi = "鼻子";
	public $zui = "嘴";
	//成员方法
	public function eat(){
		return "正在吃……";
	}
	public function shui(){
		return "正在睡……";
	}
	public function dadoudou(){
		return "正在打豆豆……";
	}
}
//实例化一个对象
$obj = new Person();
//调用成员属性不要加$符
echo $obj -> yanjin;
echo $obj -> erduo;
//echo $obj -> pigu;		//不能调用不存在的成员属性
echo $obj -> dadoudou();
//echo $obj -> jiaojiao;	//不能调用不存在的成员方法