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
<table width="400"  align="center" border="1" cellspacing="0" >
  <tr bgcolor="#cbe6b9" >
    <td>我加入/申请的社团</td>
 
	
  </tr><tr>
 <?php
 $sql="SELECT * FROM hydsh where hy_nch='$hynch'";

 $res=mysql_query($sql);

 while($data=mysql_fetch_array($res))
{
 ?>  
    <td ><?php echo $data["hy_st"]?></td>
   
  </tr>
  <?php
}
?>
</table>
<pre>
<table width="400"  align="center" border="1" cellspacing="0" >
  <tr bgcolor="#cbe6b9" >
    <td>我创建的社团</td>
 
	
  </tr><tr>
 <?php
 $sql="SELECT * FROM stinfor where st_ren='$hynch'";

 $res=mysql_query($sql);

 while($data=mysql_fetch_array($res))
{
 ?>  
    <td ><?php echo $data["st_name"]?></td>
   
  </tr>
  <?php
}
?>
</table>
<br>
</pre>

</body>
</html>
