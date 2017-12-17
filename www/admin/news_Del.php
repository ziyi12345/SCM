<?php
require("../conn.php");
$sql="delete FROM bbs WHERE bbs_id=$id";

$res=mysql_query($sql);
?>
<script language=JavaScript>{window.alert('É¾³ý³É¹¦£¡');window.location.href='news_list.php'}</script>
