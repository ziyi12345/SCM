<?php
session_start();
if($_SESSION[user]!="����Ա")
{
echo"<script>alert('���ȵ�¼');location.href='index.php'</script>";
	exit;
}
require("../conn.php");


?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ޱ����ĵ�</title>
<base ><LINK href="all.css" rel=StyleSheet type=text/css>
</head>
<table width="730"  align="center" border="1" cellspacing="0" >
  <tr bgcolor="#cbe6b9">
    <td>����</td>
    <td>ѧ��</td>
    <td>Ժϵרҵ</td>
    <td>�ǳ�</td>
    <td>�绰</td>
	<td>ɾ��</td>
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
   <td><a href=hy_Del.php?hy_id=<?php echo $data["hy_id"]?>>ɾ��</a></td>
</td>
  </tr>
  <?php
}
?>
</table>
<br>


</body>
</html>
