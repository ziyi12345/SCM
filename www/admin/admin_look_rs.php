<?php
session_start();
if($_SESSION[user]!="管理员")
{
echo"<script>alert('请先登录');location.href='index.php'</script>";
	exit;
}
require("../conn.php");
$sql="select * from stinfor where st_id=$id";
//echo $sql;
$res=mysql_query($sql);
$data=mysql_fetch_array($res);

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>无标题文档</title>
<base ><LINK href="all.css" rel=StyleSheet type=text/css>
</head>

<body>
<table width="730"  align="center" border="1" cellpadding="0" cellspacing="0" >
  <tr >
    <td width="15%" align="right">所查社团：</td>
    <td width="20%"><?php echo $data["st_name"]?></td>
    <td width="9%" align="right">会长：</td>
    <td width="10%"><?php echo $data["st_ren"]?></td>
    <td width="9%" align="right">电话：</td>
    <td width="12%"><?php echo $data["st_phone"]?></td>
	<td width="9%" align="right">email：</td>
    <td width="16%"><?php echo $data["st_email"]?></td>
  </tr>
 </table>






<br>
<table width="730"  align="center" border="1" cellspacing="0" >
  <tr bgcolor="#cbe6b9">
    <td>姓名</td>
    <td>学号</td>
    <td>院系专业</td>
    <td>社团状态</td>
    <td>电话</td>
    <td>入会时间</td>
  </tr>
 <?php
 $sql="SELECT * FROM hyinfor WHERE hy_st like '%$data[st_name]%'";

 $res=mysql_query($sql);

 while($data=mysql_fetch_array($res))
{
 ?>  <tr >
    <td><?php echo $data["hy_name"]?></td>
    <td><?php echo $data["hy_number"]?></td>
    <td><?php echo $data["hy_zy"]?></td>
    <td><?php echo $data["hy_zhw"]?></td>
    <td><?php echo $data["hy_phone"]?></td>
    <td><?php echo $data["hy_date"]?></td>
  </tr>
  <?php
}
?>
</table>
<br>


</body>
</html>
