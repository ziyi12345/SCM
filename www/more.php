<?php
session_start();
require("conn.php");

?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ޱ����ĵ�</title>
<base ><LINK href="all.css" rel=StyleSheet type=text/css>
</head>
<?php
require("top.php");
?>
<body topmargin="2">
<table width="730"  align="center" border="1" cellspacing="0"  >
  <tr >
  <td width="65%">

  </td>
  <td>&nbsp;</td>
  <td>&nbsp;
</td></tr>
  <tr bgcolor="#cbe6b9" >
    <td>����</td>
    <td>����</td>
    <td>������</td>
  </tr>
<?php
$sql="SELECT * FROM bbs WHERE bbs_toid = 0 and bbs_jb =$id ORDER BY bbs_id DESC";
$res=mysql_query($sql);

while($data=mysql_fetch_array($res))
{
?>
  <tr bgcolor="#E7FDE3">
    <td><a href=tie_show.php?id=<?php echo $data["bbs_id"]?>><?php echo $data[bbs_top]?></a></td>
    <td><?php echo $data["bbs_date"]?></td>
    <td><?php echo $data["bbs_writer"]?></td>
  </tr>
 <?php
	}
	?>
</table>

</body>
</html>
