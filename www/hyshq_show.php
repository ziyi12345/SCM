<?php
session_start();
require("conn.php");
$sqltxt="select * from hydsh where hy_nch='$hyid'";
echo $sqltxt;
$res=mysql_query($sqltxt);
$rs2=mysql_fetch_array($res);

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ޱ����ĵ�</title>
<base ><LINK href="all.css" rel=StyleSheet type=text/css>
</head>
<script language=JavaScript>
function winclose()
{
window.history.go(-1);
}
</script>
<body>
<?php
require("top.php");
?>
        <table border=0 cellspacing=1 height=183 width="730"  align="center" cellpadding="0">
          <tbody>
		   <tr>
              <td align=right height=18 width="21%">��Ա�سƣ�</td>
            <td height=18 width="79%">
              <?php echo $rs2["hy_nch"]?> </td>
          </tr>
          <tr>
            <td align=right height=18 width="21%">���룺</td>

        <td height=18 width="79%"><?php echo $rs2["hy_pwd"]?> </td>
          </tr>
          <tr>
              <td align=right height=18 width="21%">��ʵ������</td>
            <td height=18 width="79%">
           <?php echo $rs2["hy_name"]?> </td>
          </tr>
          <tr>
              <td align=right height=18 width="21%">ѧ�ţ�</td>
            <td height=18 width="79%">
              <?php echo $rs2["hy_number"]?> <font color=#ff0000>&nbsp;</font></td>
          </tr>
          <tr>
              <td align=right height=18 width="21%">Ժϵרҵ�༶��</td>
            <td height=18 width="79%">
              <?php echo $rs2["hy_zy"]?> </td>
          </tr>
          <tr>
              <td align=right height=18 width="21%">���᣺</td>
            <td height=18 width="79%">
              <?php echo $rs2["hy_address"]?> </td>
          </tr>
          <tr>
              <td align=right height=18 width="21%">�Ա�</td>
              <td height=18 width="79%">
              <?php echo $rs2["hy_sex"]?> </td>
            </tr>
          <tr>
            <td align=right height=18 width="21%">��ϵ�绰��</td>
            <td height=18 width="79%">
              <?php echo $rs2["hy_phone"]?> </td>
          </tr>
          <tr>
              <td align=right height=18 width="21%">���������գ�</td>
            <td height=18 width="79%">
              <?php echo $rs2["hy_birthday"]?> </td>
          </tr>
          <tr>
            <td align=right height=18 width="21%">�������䣺</td>
            <td height=18 width="79%">
              <?php echo $rs2["hy_email"]?> </td>
          </tr>
          <tr>
              <td align=right height=18 width="21%">��ע��<br>
          <br>
              </td>
            <td height=18 width="79%">
              <?php echo $rs2["hy_jl"]?>
              </td>
          </tr>
          <tr>
            <td align=right height=18 width="21%"></td>
            <td height=18   width="79%">
			 <a href="hz_hy_shp.php" >����</a>
             </td>
          </tr>
          </tbody>
        </table>

</body>
</html>
