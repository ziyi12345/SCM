<?php
session_start();
require("conn.php");
$hy_nch=$_SESSION["loginname"];
$st_name=$_SESSION["stname"];

$sqltxt="select * From hydsh  where hy_nch='$hy_nch'";
$res=mysql_query($sql);
$rsUser=mysql_fetch_array($res);
$zj=$rsUser["hy_st"];
$a=str_replace($st_name,"",$zj);
$sql="update hydsh set hy_st='$a' where hy_nch='$keywords'";

$res=mysql_query($sql);
$sql="delete from hyinfor where hy_nch='$keywords'";
$res=mysql_query($sql);

?><script language=JavaScript>{window.alert('资料成功删除！');window.location.href='hz_look.php'}</script>
