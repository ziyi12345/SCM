<?php
session_start();
require("../conn.php");

 $sqltext="select * from admin where admin_name='$userLoginName' and admin_pwd='$userPassword'";
$result=mysql_query($sqltext);
$data=mysql_fetch_array($result);
if(!empty($data))
	{
$_SESSION["user"] = "����Ա";
$_SESSION["stname"] = "����Ա";
//SESSION�����¼��Ϣ
header("location:index.php");
exit;

	}
	else
		{
	echo "<script>alert('�û����������');location.href='login.php';</script>";
	exit;

		}



?>