<?php
session_start();
require("../conn.php");
if($_SESSION[user]!="管理员")
{
echo"<script>alert('请先登录');location.href='index.php'</script>";
	exit;
}
$sql="update stinfor set st_name='$st_name',st_jj='$st_jj',st_zhy='$st_zhy',st_phone='$st_phone',st_ren='$st_ren',st_address='$st_address',st_email='$st_email',st_pwd='$st_pwd' where st_id=$st_id";
//echo $sql;
//exit;
$res=mysql_query($sql);

?>
<script language=JavaScript>window.alert('资料修改成功！');window.location.href='admin_st.php';</script>
