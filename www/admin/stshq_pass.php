<?php
session_start();
require("../conn.php");

if($_SESSION[user]!="管理员")
{
echo"<script>alert('请先登录');location.href='login.php'</script>";
	exit;
}
$sqltxt="update  stinfor set st_state=1 where st_id=$id";
$res=mysql_query($sqltxt);

?>
<script language=JavaScript>{window.alert('协会帐号已成功开通！');window.location.href='admin_st_shq.php'}</script>
