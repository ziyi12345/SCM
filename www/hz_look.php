<?php
session_start();
require("conn.php");
$st_name=$_SESSION["stname"];
$sql="SELECT * FROM stinfor WHERE st_name ='$st_name'";
//echo $sql;
$res=mysql_query($sql);

$data=mysql_fetch_array($res);
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��Ա�鿴��ɾ��</title>
<base ><LINK href="all.css" rel=StyleSheet type=text/css>
</head>
<?php
require("top.php");
?>
<body>
<table width="730"  align="center" border="1" cellpadding="0" cellspacing="0" bordercolor="#FF9966">
  <tr bgcolor="#FF9933">
    <td width="15%" align="right">�������ţ�</td>
    <td width="17%"><?php echo $data["st_name"]?></td>
    <td width="11%" align="right">�᳤��</td>
    <td width="10%"><?php echo $data["st_ren"]?></td>
    <td width="9%" align="right">�绰��</td>
    <td width="12%"><?php echo $data["st_phone"]?></td>
	<td width="10%" align="right">email��</td>
    <td width="16%"><?php echo $data["st_email"]?></td>
  </tr>
 </table>



<br>
<table width="730"  align="center" border="1" cellspacing="0" bordercolor="#FFFF66">
  <tr bgcolor="#FFCC33">
    <td>����</td>
    <td>ѧ��</td>
    <td>Ժϵרҵ</td>
    <td>�绰</td>
    <td>��ϸ����</td>
    <td>ɾ��</td>
  </tr>
<?php
$sql="SELECT * FROM hyinfor WHERE hy_st like '%$st_name%'";

$res=mysql_query($sql);

while($data=mysql_fetch_array($res))
{
?>
  <tr bgcolor="#E7FDE3">
    <td><?php echo $data["hy_name"]?></td>
    <td><?php echo $data["hy_number"]?></td>
    <td><?php echo $data["hy_zy"]?></td>
    <td><?php echo $data["hy_phone"]?></td>
    <td><a href="hyshq_show.php?hyid=<?php echo $data["hy_nch"]?>">��ϸ����</a></td>
    <td><input type="submit" value="ɾ��" onclick="if (confirm('ȷʵҪ������¼��')) window.location='hz_hy_del.php?keywords=<?php echo $data["hy_nch"]?>'" style="font-family: ��ϸ����, ����, Arial; font-size: 9pt; height:20px;background-color:#D4D0C8;" onMouseOver="this.style.backgroundColor='#FFC864'" onMouseOut="this.style.backgroundColor='#D4D0C8'"></td>
  </tr>
  <?php
}
?>
</table>
<br>


</body>
</html>
