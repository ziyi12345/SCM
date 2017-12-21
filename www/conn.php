<?php
error_reporting(E_ALL ^ E_NOTICE);//报错级别设置
$conn=mysql_connect("localhost","root","123456") or die("数据库服务器连接错误".mysql_error());
     mysql_select_db("shetuan",$conn) or die("数据库访问错误".mysql_error());//选择数据库
 	 mysql_query("set names gbk");//设置编码为中文
//设置时区
date_default_timezone_set('asia/shanghai');
@extract($_POST);
@extract($_GET);

?>
