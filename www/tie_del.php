<?php
require("conn.php");
$sql="delete * from bbs where bbs_id=$id";
$res=mysql_query($sql);

$sql="delete * from bbs where bbs_toid=$id";
$res=mysql_query($sql);

?>
<script language=JavaScript>{window.alert('�ɹ�ɾ����');window.location.href='right.php'}</script>
