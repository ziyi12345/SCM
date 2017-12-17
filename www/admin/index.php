<?php
session_start();
?>
<html>

<head>
<TITLE>管理员管理</TITLE>
<script language="javascript" src="utility/dtree.js"></script>

<LINK href="../images/default.css" type=text/css rel=stylesheet>
<style type="text/css">
<!--
.style3 {font-size: 24px}
.style5 {font-size: 24pt; color: #FFFFFF; }
-->
</style>
</HEAD>
<BODY text=#333333 bgColor=#ffffff leftMargin=2 topMargin=2 MARGINHEIGHT="0"
MARGINWIDTH="0">

<div align="center">
<TABLE height=70 cellSpacing=0 cellPadding=6 width=997 bgColor=#003333
  border=0><TBODY>
  <TR>
    <TD vAlign=bottom align=right width=209></TD>
	  <TD width=574 align=center vAlign=middle ><span class="style5"><?php echo $_SESSION["user"]?>界面--福州大学学生社团管理系统</span></TD>
    <TD class=normaltextwhite vAlign=bottom align=right width=178><span class="style3"></span>
      欢迎你,<?php echo $_SESSION["stname"]?><DIV id=time></DIV><SCRIPT>setInterval("time.innerHTML=new Date().toLocaleString()+' 星期'+'日一二三四五六'.charAt(new Date().getDay());",1000);
</SCRIPT>    </TD>

  </TR>
</TBODY></TABLE>

<TABLE cellSpacing=0 cellPadding=0 width=997 border=0>
  <TBODY>
  <TR>
    <TD bgColor=#ffffff height=1><IMG height=1
      src="../images/1pix.gif" width=1 border=0></TD>
  </TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width=997 border=0>
  <TBODY>
  <TR>
    <TD><IMG height=5 src="../images/line2.gif" width=997
    border=0></TD></TR></TBODY></TABLE>
</div>
<div align="center">
	<table border="0" width="997" id="table2" height="314" cellspacing="0" cellpadding="0" bgcolor="#EDECE6">
		<tr>
			<td>
			<table border="0" width="100%" id="table5" height="450" cellspacing="0" cellpadding="0">
				<tr>
					<td width="150">
					<div class="deeptree">
						<script language="javascript" src="utility/data.js"></script>
					</div>
					</td>
					<td align="center">
					<iframe name="main" border="0" frameborder="0" width="847" height="450" src="admin_st.php">
					</iframe></td>
				</tr>
			</table>
			</td>
		</tr>
	</table>
</div>
<div align="center">
	<TABLE cellSpacing=0 cellPadding=0 width=997 border=0>
  <TBODY>
  <TR>
    <TD bgColor=#ffffff height=1><IMG height=1
      src="../images/1pix.gif" width=1 border=0></TD></TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width=997 border=0>
  <TBODY>
  <TR>
    <TD bgColor=#003333 height=3><IMG height=1
      src="../images/1pix.gif" width=1 border=0></TD></TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=6 width=997 border=0>
  <TBODY>
  <TR>

</div>

</body>

</html>
