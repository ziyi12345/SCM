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
      <td width="157" align="center">�ؼ��֣�</font>
        <input name="keyword" type="text" value="" size="12">        </td>
      <td width="157">����
        <select name="tj" style="font-family:��Բ">
          <option value="hy_nch" selected>�ǳ�
	      <option value="hy_name">����
          <option value="hy_number">ѧ��</option>
        </select>
        <input name="submit" type="submit" value="�� ѯ"></td>
 </tr>
</form>
</table>
</body>
</html>

<?php
if($submit=="�� ѯ")
{
$sql="select * from hydsh where $tj='$keyword'";
$res=mysql_query($sql);
$data=mysql_fetch_array($res);
if(empty($data))
{
	exit("û�з��������Ĳ�ѯ");
}
?>
<table width="730"  align="center" height=183 border=1 cellpadding="0" cellspacing=0 >
  <tbody>
    <tr bgcolor="#cbe6b9">
      <td align=right height=18 width="21%">��Ա�سƣ�</td>
      <td height=18 width="79%"> <?php echo $data["hy_nch"]?> </td>
    </tr>
    <tr bgcolor="#E7FDE3">
      <td align=right height=18 width="21%">��ʵ������</td>
      <td height=18 width="79%"> <?php echo $data["hy_name"]?> </td>
    </tr>
    <tr bgcolor="#cbe6b9">
      <td align=right height=18 width="21%">ѧ�ţ�</td>
      <td height=18 width="79%"> <?php echo $data["hy_number"]?> <font color=#ff0000>&nbsp;</font></td>
    </tr>
    <tr bgcolor="#E7FDE3">
      <td align=right height=18 width="21%">Ժϵרҵ�༶��</td>
      <td height=18 width="79%"> <?php echo $data["hy_zy"]?> </td>
    </tr>
    <tr bgcolor="#cbe6b9">
      <td align=right height=18 width="21%">���᣺</td>
      <td height=18 width="79%"> <?php echo $data["hy_address"]?> </td>
    </tr>
    <tr bgcolor="#E7FDE3">
      <td align=right height=18 width="21%">�Ա�</td>
      <td height=18 width="79%"> <?php echo $data["hy_sex"]?> </td>
    </tr>
    <tr bgcolor="#cbe6b9">
      <td align=right height=18 width="21%">��ϵ�绰��</td>
      <td height=18 width="79%"> <?php echo $data["hy_phone"]?> </td>
    </tr>
    <tr bgcolor="#E7FDE3">
      <td align=right height=18 width="21%">���������գ�</td>
      <td height=18 width="79%"> <?php echo $data["hy_birthday"]?> </td>
    </tr>
    <tr bgcolor="#cbe6b9">
      <td align=right height=18 width="21%">�������䣺</td>
      <td height=18 width="79%"> <?php echo $data["hy_email"]?> </td>
    </tr>
    <tr bgcolor="#E7FDE3">
      <td width="21%" height=18 align=right valign="top">��ע�� </td>
      <td height=18 width="79%"> <?php echo $data["hy_jl"]?> </td>
    </tr>
    <?php
$sql="select * from hyinfor where $tj='$keyword'";
$res=mysql_query($sql);
$data=mysql_fetch_array($res);
if(empty($data))
{
	$sht="��δ�μ��κ�����";
}
else
$sht=$data[hy_st];
?>
    <tr bgcolor="#cbe6b9">
      <td align=right height=18 width="21%">�������ţ�</td>
      <td height=18 width="79%"><?php echo $sht?> </td>
    </tr>

  </tbody>
</table>
<?php
}
	  ?>