<?php
session_start();
if($_SESSION[user]!="管理员")
{
echo"<script>alert('请先登录');location.href='index.php'</script>";
	exit;
}
require("../conn.php");


?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>无标题文档</title>
<base ><LINK href="all.css" rel=StyleSheet type=text/css>
</head>
<table width="730"  align="center" border="1" cellspacing="0" >
  <tr bgcolor="#cbe6b9">
    <td>姓名</td>
    <td>学号</td>
    <td>院系专业</td>
    <td>昵称</td>
    <td>电话</td>
	<td>删除</td>
  </tr>
 <?php
 $sql="SELECT * FROM hyinfor ";

 $res=mysql_query($sql);

 while($data=mysql_fetch_array($res))
{
 ?>  <tr >
    <td><?php echo $data["hy_name"]?></td>
    <td><?php echo $data["hy_number"]?></td>
    <td><?php echo $data["hy_zy"]?></td>
    <td><?php echo $data["hy_nch"]?></td>
    <td><?php echo $data["hy_phone"]?></td>
   <td><a href=hy_Del.php?hy_id=<?php echo $data["hy_id"]?>>删除</a></td>
</td>
  </tr>
  <?php
}
?>
</table>
<br>


</body>
</html>
