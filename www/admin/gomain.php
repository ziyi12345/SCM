<?php
session_start();
$_SESSION["user"] = "";
$_SESSION["stname"] = "";
session_destroy();

?>
<script language=JavaScript>top.location.href='../index.php';</script>