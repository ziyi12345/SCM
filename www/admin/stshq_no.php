<?php
session_start();
if($_SESSION[user]!="����Ա")
{
echo"<script>alert('���ȵ�¼');location.href='index.php'</script>";
	exit;
}
require("../conn.php");
$sqltxt="Delete From stinfor  where st_id=$id";
$res=mysql_query($sqltxt);

?>
<script language=JavaScript>{window.alert('Э���ʺ��ѳɹ�ɾ����');window.location.href='admin_st_shq.php'}</script>
