<?php
session_start();
require("../conn.php");
if($_SESSION[user]!="����Ա")
{
echo"<script>alert('���ȵ�¼');location.href='index.php'</script>";
	exit;
}
$sql="update admin set admin_name='$txtname',admin_pwd='$txtpwd',admin_email='$txtemail' where admin_id=1";
$res=mysql_query($sql);

?>
<script language=JavaScript>{window.alert('�޸ĳɹ���');window.location.href='admin_edit.php'}</script>
