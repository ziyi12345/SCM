<?php
session_start();
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>福州大学学生社团管理系统</title>
<base >
<LINK href="all.css" rel=StyleSheet type=text/css>
<LINK href="assets/css/supersized.css" rel=StyleSheet type=text/css>
</head>
<base >
<STYLE>.navPoint {
	COLOR: white; CURSOR: hand; FONT-FAMILY: Webdings; FONT-SIZE: 9pt
}
P {
	FONT-SIZE: 14px;
}
</STYLE>
<SCRIPT>
function switchSysBar(){
	if (switchPoint.innerText==3){
		switchPoint.innerText=4
		document.all("frmTitle").style.display="none"
	}
	else{
		switchPoint.innerText=3
		document.all("frmTitle").style.display=""
	}
}
</SCRIPT>
<BODY   style="MARGIN: 0px">


<?php
require("conn.php");
require("top.php");
?>

<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<LINK href="all.css" rel=StyleSheet type=text/css>
<!-- <LINK href="assets/css/supersized.css" rel=StyleSheet type=text/css> -->
<!-- <body background="back_color.gif"> -->

<table width="950" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>

    <td width="950" height="195" align="center">
    <table width="950"  align="center"  align="center" border="1" cellspacing="0"  >
  <tr ><td width="65%">
公告通知：</td><td >&nbsp;

</td></tr>
  <tr  >
    <td>主题</td>
    <td width="14%">日期</td>

  </tr>
<?php
	$sql="SELECT * FROM bbs WHERE bbs_jb=1";
$res=mysql_query($sql);
while($data=mysql_fetch_array($res))
{
	?>
  <tr bgcolor="#E7FDE3">
    <td><a href=tzh_show.php?id=<?php echo $data["bbs_id"]?>><?php echo $data[bbs_top]?></a></td>
    <td><?php echo $data["bbs_date"]?></td>

  </tr>
<?php
}
?>
  <tr align="right"  >
    <td colspan="2"><a href="more.php?id=1">查看更多&gt;&gt;&gt;</a> </td>
  </tr>
</table></td>
  </tr>
  <tr>
    <td>
    <table width="950"  align="center" border="1" cellspacing="0" >
  <tr ><td width="77%">
普通贴：</td><td width="23%"><a href="new.php?id=0">发新贴</a>
 </td></tr><tr  >
    <td>主题</td>
    <td >日期</td>

  </tr>
<?php
	$sql="SELECT * FROM bbs WHERE bbs_toid = 0  and  bbs_jb=0";
	$res=mysql_query($sql);
while($data=mysql_fetch_array($res))
{
	?>
	<tr bgcolor="#E7FDE3">
    <td><a href=tie_show.php?id=<?php echo $data["bbs_id"]?>><?php echo $data[bbs_top]?></a></td>
    <td><?php echo $data["bbs_date"]?></td>

  </tr>
 <?php
}
		?>
  <tr align="right"  >
    <td colspan="2"><a href="more.php?id=0">查看更多&gt;&gt;&gt;</a></td>
  </tr>
 <tr align="center"  >
    <td colspan="2"><a href="admin/login.php" target="_top">管理员登录</a></td>
  </tr>

</table></td>

</table>

</body>
  <!-- Javascript -->
  <!-- <script src="assets/js/jquery-1.8.2.min.js" ></script>
  <script src="assets/js/supersized.3.2.7.min.js" ></script>
  <script src="assets/js/supersized-init.js" ></script>
  <script src="assets/js/scripts.js" ></script> -->
</html>
