<?php
require("conn.php");
$sql="delete * from bbs where bbs_id=$id";
$res=mysql_query($sql);

$sql="delete * from bbs where bbs_toid=$id";
$res=mysql_query($sql);

?>
<script language=JavaScript>{window.alert('³É¹¦É¾³ý£¡');window.location.href='right.php'}</script>
