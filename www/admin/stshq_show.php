<?php
session_start();
if($_SESSION[user]!="����Ա")
{
echo"<script>alert('���ȵ�¼');location.href='index.php'</script>";
	exit;
}
require("../conn.php");
	$sql="select * from stinfor where st_id=$id";
$res=mysql_query($sql);
$data=mysql_fetch_array($res);

?>



<html>
<head>
<title>���Ų鿴</title>
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
              <td align=right height=25 width="21%">�������ƣ�</td>
              <td height=25 width="79%"><?php echo $data["st_name"]?>
              </td>
            </tr>
            <tr>
              <td align=right  width="21%">���ż�飺</td>

            <td width="79%"><?php echo $data["st_jj"]?></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">�����ˣ�</td>

            <td height=18 width="79%"><?php echo $data["st_ren"]?></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">�Ա�</td>

            <td height=18 width="79%"><?php echo $data["st_sex"]?></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">�������룺</td>

            <td height=18 width="79%"><?php echo $data["st_pwd"]?></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">�������ڣ�</td>

            <td height=18 width="79%"><?php echo $data["st_date"]?></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">��ϵ�绰��</td>

            <td height=18 width="79%"><?php echo $data["st_phone"]?></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">����ţ�</td>

            <td height=18 width="79%"><?php echo $data["st_address"]?> </td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">����Ժϵרҵ��</td>

            <td height=18 width="79%"><?php echo $data["st_zhy"]?></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">�������䣺</td>

            <td height=18 width="79%"><?php echo $data["st_email"]?></td>
            </tr>

          </tbody>
        </table>
      </td>
  </tr>
</table>

</body>
</html>
