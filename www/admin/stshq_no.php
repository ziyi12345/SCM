<?php
session_start();
if($_SESSION[user]!="管理员")
{
echo"<script>alert('请先登录');location.href='index.php'</script>";
	exit;
}
require("../conn.php");
$sqltxt="Delete From stinfor  where st_id=$id";
$res=mysql_query($sqltxt);

?>
<script language=JavaScript>{window.alert('协会帐号已成功删除！');window.location.href='admin_st_shq.php'}</script>
