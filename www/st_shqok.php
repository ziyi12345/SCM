<?php
session_start();
require("conn.php");
$sql="select * from stinfor where st_name='$txt_name'";
$res=mysql_query($sql);
$rs=mysql_fetch_array($res);
if(!empty($rs))
{
echo "<script language=JavaScript>{window.alert('此协会已经注册!');window.history.go(-1)}</script>";
exit;
}
$adddate=date("Y-m-d");
$sql="insert into stinfor (st_name,st_jj,st_ren,st_sex,st_pwd,st_phone,st_address,st_zhy,st_email,st_date,st_state) values ('$txt_name','$txt_jj','$txt_ren','$txt_sex','$txt_pwd','$txt_phone','$txt_address','$txt_zhy','$txt_email','$adddate',0)";
$res=mysql_query($sql);

?>
<script language=JavaScript>{window.alert('注册成功!请等待管理员为您开通账号！');window.location.href='index.php'}</script>

