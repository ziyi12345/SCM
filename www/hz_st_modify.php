<?php
session_start();
require("conn.php");
$st_name=$_SESSION["stname"];
$sql="update stinfor set st_jj='$txt_jj',st_ren='$txt_ren',st_phone='$txt_phone',st_address='$txt_address',st_zhy='txt_zhy',st_email='$txt_email' where st_name='$st_name'";
$res=mysql_query($sql);

?><script language=JavaScript>{window.alert('资料修改成功！');window.location.href='hz_st_edit.php'}</script>
