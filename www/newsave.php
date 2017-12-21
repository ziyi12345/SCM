<?php
require("conn.php");
$adddate=date("Y-m-d");
$sql="insert into bbs (bbs_top,bbs_content,bbs_jb,bbs_writer,bbs_date,bbs_stname) values ('$txt1','$content','0','$txt4','$adddate','$txt5')";

$res=mysql_query($sql);
?>
<script language=JavaScript>{window.alert('发表成功！');window.location.href='index.php'}</script>

