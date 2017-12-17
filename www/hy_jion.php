<?php
session_start();
require("conn.php");

$hynch=$_SESSION["loginname"];
$sql="select * from stinfor where st_state=1 ORDER BY st_date DESC";
//echo $sql;
$res=mysql_query($sql);


?>
<html>
<head>
<title>会 员 申请入会</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<?php
require("top.php");

?>

<base ><LINK href="all.css" rel=StyleSheet type=text/css>
</head>

<body bgcolor="#FFFFFF" leftmargin="0" topmargin="10" vlink="#003399" alink="#CCCCCC">
<div align="right"> </div>
<table width="606" border="1" align="center" cellpadding="0" cellspacing="0"  bgcolor="#900000">
  <tr valign="top" bgcolor="#FFFCEC">
    <td width="604" bgcolor="#E7FDE3">
      <form action=hy_join_ok.php method=post name="frmRegister">
        <table border=0 cellspacing=1 height=46 width="730"  align="center" cellpadding="0">
          <tbody>
            <tr>
              <td align=right height=25 width="21%">志愿参加：</td>
              <td height=25 width="79%"> <select name="txtst" id="txtst">
                  <option value="" selected>请选择</option>
<?php
while($rs=mysql_fetch_array($res))
{
?>
    <option value="<?php echo $rs["st_name"]?>"><?php echo $rs["st_name"]?></option>
   <?php
}
	?>
  </select>  <font color=#ff0000>*<span class=tips_reg style="FONT-SIZE: 9pt"><font color="#009999">选择你要参加的协会</font></span></font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%"></td>
              <td height=18   width="79%"> <input name="cmdOK" type="submit" value=提交资料>
              </td>
            </tr>
          </tbody>
        </table>
      </form></td>
  </tr>
</table>

</body>
</html>

<SCRIPT language=VBScript>
    sub cmdOK_OnClick
         if frmRegister.txtst.value="" then
			alert "提示: 请选择你要参加的协会!"
															frmRegister.txtst.focus
														else
																	call frmRegister.submit()

														 end if

    end sub
</SCRIPT>