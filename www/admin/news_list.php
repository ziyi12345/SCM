<?php
session_start();
require("../conn.php");

if($_SESSION[user]!="管理员")
{
echo"<script>alert('请先登录');location.href='index.php'</script>";
	exit;
}
?><table width="750"  align="center"  align="center" border="1" cellspacing="0"  >
  <tr ><td width="95%">
公告通知：</td><td >&nbsp;

</td></tr>
  <tr  >
    <td>主题</td>
    <td width="14%">操作</td>

  </tr>
<?php
	$sql="SELECT * FROM bbs WHERE bbs_jb=1";
$res=mysql_query($sql);
while($data=mysql_fetch_array($res))
{
	?>
  <tr bgcolor="#E7FDE3">
    <td><a href=../tzh_show.php?id=<?php echo $data["bbs_id"]?>><?php echo $data[bbs_top]?></a></td>
    <td><a href="news_Del.php?id=<?php echo $data["bbs_id"]?>">删除</a></td>

  </tr>
<?php
}
?>