<?php
session_start();
$_SESSION["user"] = "";
$_SESSION["stname"] = "";
$_SESSION["loginname"]="";
session_destroy();

?>
<script language=JavaScript>window.alert('×¢Ïú³É¹¦!');top.location.href='index.php';</script>