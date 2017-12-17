<?php
session_start();
require("conn.php");

$hynch=$_SESSION["loginname"];
$sql="select * from hydsh where hy_nch='$hynch'";
//echo $sql;
$res=mysql_query($sql);
$rs=mysql_fetch_array($res);

?>

<html>
<head>
<title>我的社团</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<?php
require("top.php");
?>

<base ><LINK href="all.css" rel=StyleSheet type=text/css>
</head>

</head>
<body>
<table width="730"  align="center" border="1" cellspacing="0" >
  <tr bgcolor="#cbe6b9">
    <td>社团名</td>
    <td>当前状态</td>
	
  </tr>
 <?php
 $sql="SELECT * FROM hydsh where hy_nch='$hynch'";

 $res=mysql_query($sql);

 while($data=mysql_fetch_array($res))
{
 ?>  <tr >
    <td><?php echo $data["hy_st"]?></td>
    <td><?php echo $data["hy_zhw"]?></td>
  
  </tr>
  <?php
}
?>
</table>
<br>


</body>
</html>
