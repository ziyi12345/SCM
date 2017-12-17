<?php
session_start();
require("../conn.php");

if($_SESSION[user]!="管理员")
{
echo"<script>alert('请先登录');location.href='index.php'</script>";
	exit;
}
?>


<html>
<head>
<title>Untitled Documnt</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<LINK href="all.css" rel=StyleSheet type=text/css>
</head>
<script language=JavaScript>
function winclose()
{
window.history.go(-1);
}
</script>
<body>
<p>&nbsp;</p>
<table border="0" align="center" cellspacing="0">
<form method="POST" action="admin_search.php">
 <tr>
      <td width="157" align="center">关键字：</font>
        <input name="keyword" type="text" value="" size="12">        </td>
      <td width="157">按照
        <select name="tj" style="font-family:幼圆">
          <option value="hy_nch" selected>昵称
	      <option value="hy_name">姓名
          <option value="hy_number">学号</option>
        </select>
        <input name="submit" type="submit" value="查 询"></td>
 </tr>
</form>
</table>
</body>
</html>

<?php
if($submit=="查 询")
{
$sql="select * from hydsh where $tj='$keyword'";
$res=mysql_query($sql);
$data=mysql_fetch_array($res);
if(empty($data))
{
	exit("没有符合条件的查询");
}
?>
<table width="730"  align="center" height=183 border=1 cellpadding="0" cellspacing=0 >
  <tbody>
    <tr bgcolor="#cbe6b9">
      <td align=right height=18 width="21%">会员呢称：</td>
      <td height=18 width="79%"> <?php echo $data["hy_nch"]?> </td>
    </tr>
    <tr bgcolor="#E7FDE3">
      <td align=right height=18 width="21%">真实姓名：</td>
      <td height=18 width="79%"> <?php echo $data["hy_name"]?> </td>
    </tr>
    <tr bgcolor="#cbe6b9">
      <td align=right height=18 width="21%">学号：</td>
      <td height=18 width="79%"> <?php echo $data["hy_number"]?> <font color=#ff0000>&nbsp;</font></td>
    </tr>
    <tr bgcolor="#E7FDE3">
      <td align=right height=18 width="21%">院系专业班级：</td>
      <td height=18 width="79%"> <?php echo $data["hy_zy"]?> </td>
    </tr>
    <tr bgcolor="#cbe6b9">
      <td align=right height=18 width="21%">宿舍：</td>
      <td height=18 width="79%"> <?php echo $data["hy_address"]?> </td>
    </tr>
    <tr bgcolor="#E7FDE3">
      <td align=right height=18 width="21%">性别：</td>
      <td height=18 width="79%"> <?php echo $data["hy_sex"]?> </td>
    </tr>
    <tr bgcolor="#cbe6b9">
      <td align=right height=18 width="21%">联系电话：</td>
      <td height=18 width="79%"> <?php echo $data["hy_phone"]?> </td>
    </tr>
    <tr bgcolor="#E7FDE3">
      <td align=right height=18 width="21%">出生年月日：</td>
      <td height=18 width="79%"> <?php echo $data["hy_birthday"]?> </td>
    </tr>
    <tr bgcolor="#cbe6b9">
      <td align=right height=18 width="21%">电子邮箱：</td>
      <td height=18 width="79%"> <?php echo $data["hy_email"]?> </td>
    </tr>
    <tr bgcolor="#E7FDE3">
      <td width="21%" height=18 align=right valign="top">备注： </td>
      <td height=18 width="79%"> <?php echo $data["hy_jl"]?> </td>
    </tr>
    <?php
$sql="select * from hyinfor where $tj='$keyword'";
$res=mysql_query($sql);
$data=mysql_fetch_array($res);
if(empty($data))
{
	$sht="还未参加任何社团";
}
else
$sht=$data[hy_st];
?>
    <tr bgcolor="#cbe6b9">
      <td align=right height=18 width="21%">所在社团：</td>
      <td height=18 width="79%"><?php echo $sht?> </td>
    </tr>

  </tbody>
</table>
<?php
}
	  ?>