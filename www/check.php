<?php
session_start();
require("conn.php");


 $sqltext="select * from stinfor where st_ren='$uid' and st_pwd='$pwd'";
$result=mysql_query($sqltext);
$data=mysql_fetch_array($result);
if(!empty($data))
	{
		$_SESSION["loginname"]=$uid;

$_SESSION["user"] = "�᳤";
$_SESSION["username"] = $data[st_ren];
$_SESSION["stname"] = $data[st_name];
//SESSION�����¼��Ϣ
header("location:index.php");
exit;

	}
	else
		{
	echo "<script>alert('�᳤�û����������');location.href='index.php';</script>";
	exit;

		}


?>
