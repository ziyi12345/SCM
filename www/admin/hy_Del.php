<?php
require("../conn.php");
$sql="delete FROM hyinfor WHERE hy_id=$hy_id";

$res=mysql_query($sql);
?>
<script language=JavaScript>{window.alert('É¾³ý³É¹¦£¡');window.location.href='user_list.php'}</script>