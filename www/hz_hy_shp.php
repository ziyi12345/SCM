<?php
session_start();
require("conn.php");
$st_name=$_SESSION["stname"];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��������</title>
<base ><LINK href="all.css" rel=StyleSheet type=text/css>
</head>
<?php
require("top.php");
?>
<body>
<table width="60%" border="1" cellspacing="0" align="center" >
  <tr >
    <td>��Ա����</td>
    <td>��ϸ����</td>
    <td>ͨ��</td>
    <td>�ܾ�</td>
  </tr>

 <?php
 $sql="SELECT hy_nch, hy_name FROM hydsh WHERE hy_st like '%$st_name%' And hy_zhw = '����'  ORDER BY hy_date DESC";
$res=mysql_query($sql);

while($data=mysql_fetch_array($res))
{
?>
 <tr bgcolor="#E7FDE3">
    <td><?php echo $data["hy_name"]?></td>
    <td><a href="hyshq_show.php?hyid=<?php echo $data["hy_nch"]?>" target="_blank">��ϸ����</a></td>
    <td><a href="hyshq_pass.php?hyid=<?php echo $data["hy_nch"]?>">ͨ��</a></td>
    <td><a href="hyshq_no.php?hyid=<?php echo $data["hy_nch"]?>">�ܾ�</a></td>
  </tr>
  <?php
}
?>

</table>
</body>
</html>
