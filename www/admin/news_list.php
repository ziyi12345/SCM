<?php
session_start();
require("../conn.php");

if($_SESSION[user]!="����Ա")
{
echo"<script>alert('���ȵ�¼');location.href='index.php'</script>";
	exit;
}
?><table width="750"  align="center"  align="center" border="1" cellspacing="0"  >
  <tr ><td width="95%">
����֪ͨ��</td><td >&nbsp;

</td></tr>
  <tr  >
    <td>����</td>
    <td width="14%">����</td>

  </tr>
<?php
	$sql="SELECT * FROM bbs WHERE bbs_jb=1";
$res=mysql_query($sql);
while($data=mysql_fetch_array($res))
{
	?>
  <tr bgcolor="#E7FDE3">
    <td><a href=../tzh_show.php?id=<?php echo $data["bbs_id"]?>><?php echo $data[bbs_top]?></a></td>
    <td><a href="news_Del.php?id=<?php echo $data["bbs_id"]?>">ɾ��</a></td>

  </tr>
<?php
}
?>