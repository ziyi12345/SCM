<?php
session_start();
require("../conn.php");

if($_SESSION[user]!="����Ա")
{
echo"<script>alert('���ȵ�¼');location.href='index.php'</script>";
	exit;
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��������</title>
<base ><LINK href="all.css" rel=StyleSheet type=text/css>
</head>

<body>
<table width="90%" border="1" cellspacing="0" >
  <tr >
    <td>��������</td>
    <td>��ϸ����</td>
    <td>ͨ��</td>
    <td>�ܾ�</td>
  </tr>

 <?php
 $sql="SELECT * FROM stinfor WHERE st_state=0 order by st_id DESC";
$res=mysql_query($sql);
while($data=mysql_fetch_array($res))
{
 ?>
  <tr bgcolor="#cbe6b9">
    <td><?php echo $data["st_name"]?></td>
    <td><a href="stshq_show.php?id=<?php echo $data["st_id"]?>" >��ϸ����</a></td>
    <td><a href="stshq_pass.php?id=<?php echo $data["st_id"]?>">ͨ��</a></td>
    <td><a href="stshq_no.php?id=<?php echo $data["st_id"]?>">�ܾ�</a></td>
  </tr>
  <?php
}
?>

</table>
</body>
</html>
