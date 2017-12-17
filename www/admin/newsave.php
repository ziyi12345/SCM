<?php
require("../conn.php");
$adddate=date("Y-m-d");
$sql="insert into bbs (bbs_top,bbs_content,bbs_jb,bbs_writer,bbs_date) values ('$txt1','$content','$txt3','$txt4','$adddate')";

$res=mysql_query($sql);
?>
<script language=JavaScript>{window.alert('发表成功！');window.location.href='news_list.php'}</script>

