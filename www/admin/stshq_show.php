<?php
session_start();
if($_SESSION[user]!="管理员")
{
echo"<script>alert('请先登录');location.href='index.php'</script>";
	exit;
}
require("../conn.php");
	$sql="select * from stinfor where st_id=$id";
$res=mysql_query($sql);
$data=mysql_fetch_array($res);

?>



<html>
<head>
<title>社团查看</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">

<script language=JavaScript>
function winclose()
{
window.close();
}
</script>
<base ><LINK href="all.css" rel=StyleSheet type=text/css>
</head>

<body bgcolor="#FFFFFF" leftmargin="0" topmargin="10" vlink="#003399" alink="#CCCCCC">

<table width="606" border="0" cellpadding="0" align="center" bgcolor="#900000" cellspacing="1" >
  <tr valign="top" bgcolor="#FFFCEC">
    <td width="604" bgcolor="#ffffec">
        <table border=0 cellspacing=1 width="730"  align="center" cellpadding="0" style="TABLE-LAYOUT: fixed; WORD-BREAK: break-all">
          <tbody>
            <tr>
              <td align=right height=25 width="21%">社团名称：</td>
              <td height=25 width="79%"><?php echo $data["st_name"]?>
              </td>
            </tr>
            <tr>
              <td align=right  width="21%">社团简介：</td>

            <td width="79%"><?php echo $data["st_jj"]?></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">申请人：</td>

            <td height=18 width="79%"><?php echo $data["st_ren"]?></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">性别：</td>

            <td height=18 width="79%"><?php echo $data["st_sex"]?></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">管理密码：</td>

            <td height=18 width="79%"><?php echo $data["st_pwd"]?></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">申请日期：</td>

            <td height=18 width="79%"><?php echo $data["st_date"]?></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">联系电话：</td>

            <td height=18 width="79%"><?php echo $data["st_phone"]?></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">宿舍号：</td>

            <td height=18 width="79%"><?php echo $data["st_address"]?> </td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">所在院系专业：</td>

            <td height=18 width="79%"><?php echo $data["st_zhy"]?></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">电子邮箱：</td>

            <td height=18 width="79%"><?php echo $data["st_email"]?></td>
            </tr>

          </tbody>
        </table>
      </td>
  </tr>
</table>

</body>
</html>
