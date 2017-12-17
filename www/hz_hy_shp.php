<?php
session_start();
require("conn.php");
$st_name=$_SESSION["stname"];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>社团审批</title>
<base ><LINK href="all.css" rel=StyleSheet type=text/css>
</head>
<?php
require("top.php");
?>
<body>
<table width="60%" border="1" cellspacing="0" align="center" >
  <tr >
    <td>会员名称</td>
    <td>详细资料</td>
    <td>通过</td>
    <td>拒绝</td>
  </tr>

 <?php
 $sql="SELECT hy_nch, hy_name FROM hydsh WHERE hy_st like '%$st_name%' And hy_zhw = '待审'  ORDER BY hy_date DESC";
$res=mysql_query($sql);

while($data=mysql_fetch_array($res))
{
?>
 <tr bgcolor="#E7FDE3">
    <td><?php echo $data["hy_name"]?></td>
    <td><a href="hyshq_show.php?hyid=<?php echo $data["hy_nch"]?>" target="_blank">详细资料</a></td>
    <td><a href="hyshq_pass.php?hyid=<?php echo $data["hy_nch"]?>">通过</a></td>
    <td><a href="hyshq_no.php?hyid=<?php echo $data["hy_nch"]?>">拒绝</a></td>
  </tr>
  <?php
}
?>

</table>
</body>
</html>
