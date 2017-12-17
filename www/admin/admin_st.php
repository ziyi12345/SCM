<?php
session_start();
if($_SESSION[user]!="管理员")
{
echo"<script>alert('请先登录');location.href='login.php'</script>";
exit;
}
require("../conn.php");

?>









<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title></title>
<base ><LINK href="all.css" rel=StyleSheet type=text/css>
</head>

<body>
<table width="90%" border="1" cellspacing="0" >
  <tr>
    <td >社团名称</td>
    <td >会长</td>
    <td >查看/修改</td>
    <td >删除</td>
  </tr>

 <?php
 $sql="SELECT * FROM stinfor WHERE st_state=1 order by st_id DESC";
$res=mysql_query($sql);
while($data=mysql_fetch_array($res))
{
 ?>
  <tr>
    <td><?php echo $data["st_name"]?></td>
    <td><?php echo $data["st_ren"]?></td>
    <td><a href="admin_st_edit1.php?id=<?php echo $data["st_id"]?>">查看/修改</a></td>
    <td><input type="button" value="删除" onclick="if (confirm('确实要此条记录吗？')) window.location='admin_st_delok.php?id=<?php echo $data["st_id"]?>'" style="font-family: 新细明体, 宋体, Arial; font-size: 9pt; height:20px;background-color:#D4D0C8;" onMouseOver="this.style.backgroundColor='#FFC864'" onMouseOut="this.style.backgroundColor='#D4D0C8'"></td>
  </tr>
  <?php
}
?>

</table>
</body>
</html>

