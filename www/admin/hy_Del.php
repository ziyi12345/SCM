<?php
require("../conn.php");
$sql="delete FROM hyinfor WHERE hy_id=$hy_id";

$res=mysql_query($sql);
?>
<script language=JavaScript>{window.alert('ɾ���ɹ���');window.location.href='user_list.php'}</script>