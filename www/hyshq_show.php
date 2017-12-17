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
<title>无标题文档</title>
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
              <td align=right height=18 width="21%">会员呢称：</td>
            <td height=18 width="79%">
              <?php echo $rs2["hy_nch"]?> </td>
          </tr>
          <tr>
            <td align=right height=18 width="21%">密码：</td>

        <td height=18 width="79%"><?php echo $rs2["hy_pwd"]?> </td>
          </tr>
          <tr>
              <td align=right height=18 width="21%">真实姓名：</td>
            <td height=18 width="79%">
           <?php echo $rs2["hy_name"]?> </td>
          </tr>
          <tr>
              <td align=right height=18 width="21%">学号：</td>
            <td height=18 width="79%">
              <?php echo $rs2["hy_number"]?> <font color=#ff0000>&nbsp;</font></td>
          </tr>
          <tr>
              <td align=right height=18 width="21%">院系专业班级：</td>
            <td height=18 width="79%">
              <?php echo $rs2["hy_zy"]?> </td>
          </tr>
          <tr>
              <td align=right height=18 width="21%">宿舍：</td>
            <td height=18 width="79%">
              <?php echo $rs2["hy_address"]?> </td>
          </tr>
          <tr>
              <td align=right height=18 width="21%">性别：</td>
              <td height=18 width="79%">
              <?php echo $rs2["hy_sex"]?> </td>
            </tr>
          <tr>
            <td align=right height=18 width="21%">联系电话：</td>
            <td height=18 width="79%">
              <?php echo $rs2["hy_phone"]?> </td>
          </tr>
          <tr>
              <td align=right height=18 width="21%">出生年月日：</td>
            <td height=18 width="79%">
              <?php echo $rs2["hy_birthday"]?> </td>
          </tr>
          <tr>
            <td align=right height=18 width="21%">电子邮箱：</td>
            <td height=18 width="79%">
              <?php echo $rs2["hy_email"]?> </td>
          </tr>
          <tr>
              <td align=right height=18 width="21%">备注：<br>
          <br>
              </td>
            <td height=18 width="79%">
              <?php echo $rs2["hy_jl"]?>
              </td>
          </tr>
          <tr>
            <td align=right height=18 width="21%"></td>
            <td height=18   width="79%">
			 <a href="hz_hy_shp.php" >后退</a>
             </td>
          </tr>
          </tbody>
        </table>

</body>
</html>
