<?php
session_start();
require("../conn.php");
if($_SESSION[user]!="����Ա")
{
echo"<script>alert('���ȵ�¼');location.href='index.php'</script>";
	exit;
}
$sql="delete from stinfor where st_id=$id";

$res=mysql_query($sql);

?>
<script language=JavaScript>{window.alert('���ϳɹ�ɾ����');window.location.href='admin_st.php'}</script>
