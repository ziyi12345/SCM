<?php
error_reporting(E_ALL ^ E_NOTICE);//����������
$conn=mysql_connect("localhost","root","123456") or die("���ݿ���������Ӵ���".mysql_error());
     mysql_select_db("shetuan",$conn) or die("���ݿ���ʴ���".mysql_error());//ѡ�����ݿ�
 	 mysql_query("set names gbk");//���ñ���Ϊ����
//����ʱ��
date_default_timezone_set('asia/shanghai');
@extract($_POST);
@extract($_GET);

?>
