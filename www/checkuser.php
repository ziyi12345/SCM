<?php
session_start();
require("conn.php");
$sqltext="select * from hydsh where hy_nch='$uid2' and hy_pwd='$pwd2'";
$result=mysql_query($sqltext);
$data=mysql_fetch_array($result);
if(!empty($data))
	{
$_SESSION["loginname"]=$uid2;
	$_SESSION["user"] = "��ͨ��Ա";
	$_SESSION["username"] =$data[hy_name];
	$sql="select * from hyinfor where hy_nch='$uid2'";
	$result=mysql_query($sql);
	$data1=mysql_fetch_array($result);
	if($data1[hy_st]!="")
	$_SESSION["stname"]=$data1[hy_st];
	else
	$_SESSION["stname"]="���޲μ�����";
//SESSION�����¼��Ϣ
	header("location:index.php");
	exit;

	}
	else
		{
	echo "<script>alert('�û����������');location.href='index.php';</script>";
	exit;

		}

?>