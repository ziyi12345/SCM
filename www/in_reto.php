<?php
session_start();
require("conn.php");
if($txt3=="")
{
echo "<script language=JavaScript>{window.alert('请先登录！');window.location.href='index.php'}</script>";
exit;
}
$adddate=date("Y-m-d");
$sql="insert into bbs (bbs_content,bbs_toid,bbs_writer,bbs_date) values('$txt1','$txt2','$txt3','$adddate')";
$res=mysql_query($sql);

?>
<script language=JavaScript>{window.alert('发表成功！');window.location.href='index.php'}</script>
