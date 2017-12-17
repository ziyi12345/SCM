<?php
session_start();
require("../conn.php");

 $sqltext="select * from admin where admin_name='$userLoginName' and admin_pwd='$userPassword'";
$result=mysql_query($sqltext);
$data=mysql_fetch_array($result);
if(!empty($data))
	{
$_SESSION["user"] = "管理员";
$_SESSION["stname"] = "管理员";
//SESSION保存登录信息
header("location:index.php");
exit;

	}
	else
		{
	echo "<script>alert('用户名密码错误');location.href='login.php';</script>";
	exit;

		}



?>