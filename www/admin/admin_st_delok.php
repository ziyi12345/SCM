<?php
session_start();
require("../conn.php");
if($_SESSION[user]!="管理员")
{
echo"<script>alert('请先登录');location.href='index.php'</script>";
	exit;
}
$sql="delete from stinfor where st_id=$id";

$res=mysql_query($sql);

?>
<script language=JavaScript>{window.alert('资料成功删除！');window.location.href='admin_st.php'}</script>
