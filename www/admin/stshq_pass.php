<?php
session_start();
require("../conn.php");

if($_SESSION[user]!="����Ա")
{
echo"<script>alert('���ȵ�¼');location.href='login.php'</script>";
	exit;
}
$sqltxt="update  stinfor set st_state=1 where st_id=$id";
$res=mysql_query($sqltxt);

?>
<script language=JavaScript>{window.alert('Э���ʺ��ѳɹ���ͨ��');window.location.href='admin_st_shq.php'}</script>
