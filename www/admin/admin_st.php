<?php
session_start();
if($_SESSION[user]!="����Ա")
{
echo"<script>alert('���ȵ�¼');location.href='login.php'</script>";
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
    <td >��������</td>
    <td >�᳤</td>
    <td >�鿴/�޸�</td>
    <td >ɾ��</td>
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
    <td><a href="admin_st_edit1.php?id=<?php echo $data["st_id"]?>">�鿴/�޸�</a></td>
    <td><input type="button" value="ɾ��" onclick="if (confirm('ȷʵҪ������¼��')) window.location='admin_st_delok.php?id=<?php echo $data["st_id"]?>'" style="font-family: ��ϸ����, ����, Arial; font-size: 9pt; height:20px;background-color:#D4D0C8;" onMouseOver="this.style.backgroundColor='#FFC864'" onMouseOut="this.style.backgroundColor='#D4D0C8'"></td>
  </tr>
  <?php
}
?>

</table>
</body>
</html>

