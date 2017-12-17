<?php
session_start();
$_SESSION["user"] = "";
$_SESSION["stname"] = "";
session_destroy();

?>
<script language=JavaScript>window.alert('µÇ³ö³É¹¦!');top.location.href='../index.php';</script>