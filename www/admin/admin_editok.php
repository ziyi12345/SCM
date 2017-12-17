<?php
session_start();
require("../conn.php");
if($_SESSION[user]!="管理员")
{
echo"<script>alert('请先登录');location.href='index.php'</script>";
	exit;
}
$sql="update admin set admin_name='$txtname',admin_pwd='$txtpwd',admin_email='$txtemail' where admin_id=1";
$res=mysql_query($sql);

?>
<script language=JavaScript>{window.alert('修改成功！');window.location.href='admin_edit.php'}</script>
