<?php
session_start();
require("conn.php");
$hynch=$_SESSION["loginname"];
$sql="update  hyinfor set hy_pwd='$txtPass',hy_number='$txtnumber',hy_zy='$txtzy',hy_address='$txtaddress',hy_phone='$txtphone',hy_birthday='$txtbirthday',hy_email='$txtEmail',hy_jl='$txtjl' where hy_nch='$hynch'";

$res=mysql_query($sql);

$sqltext="update hydsh set hy_pwd='$txtPass',hy_number='$txtnumber',hy_zy='$txtzy',hy_address='$txtaddress',hy_phone='$txtphone',hy_birthday='$txtbirthday',hy_email='$txtEmail',hy_jl='$txtjl' where hy_nch='$hynch'";
$res=mysql_query($sqltext);

?>
<script language=JavaScript>{window.alert('资料修改成功！');window.history.go(-1)}</script>

