<?php
require("../conn.php");
session_start();
if($_SESSION[user]!="����Ա")
{
echo"<script>alert('���ȵ�¼');location.href='index.php'</script>";
	exit;
}
$sql="select * from admin";
$res=mysql_query($sql);
$rsUser=mysql_fetch_array($res);
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ޱ����ĵ�</title>
<base ><LINK href="all.css" rel=StyleSheet type=text/css>
</head>

<body>

<form name="form1" method="post" action="admin_editok.php">

  <table width="730"  align="center" border="1" cellspacing="0" >
    <tr>
      <td align="right">�ʺţ�</td>
    <td><input name="txtname" type="text" id="txtname" value="<?php echo $rsUser["admin_name"]?>" size="15" maxlength="15"></td>
  </tr>
  <tr>
      <td align="right">��&nbsp; ��:</td>
    <td><input name="txtpwd" type="text" id="txtpwd2" value="<?php echo $rsUser["admin_pwd"]?>" size="15" maxlength="15"></td>
  </tr>
  <tr>
      <td align="right">Email��</td>
    <td><input name="txtemail" type="text" id="txtemail3" value="<?php echo $rsUser["admin_email"]?>" size="20" maxlength="30"></td>
  </tr>
  <tr>
      <td align="right">&nbsp;</td>
    <td><input name="cmdOK" type="button" id="cmdOK2" value="�޸�">
      <input name="cmdNo" type="reset" id="cmdNo" value="����"></td>
  </tr>
</table>

</form></body>
</html>

<SCRIPT language=VBScript>
    sub cmdOK_OnClick
		if form1.txtname.value="" then
			alert "��ʾ: ����������ʺ�!"
			form1.txtname.focus
		else
			if form1.txtpwd.value="" then
				alert "��ʾ: �������������!"
				form1.txtpwd.focus
			else
                  if form1.txtemail.value="" then
										alert "��ʾ: �����������ϵ����!"
										form1.txtemail.focus
									else
										if instr(1,form1.txtemail.value,"@")<2 then
											alert "��ʾ; �����ϵ���䲻��!"
											form1.txtemail.focus
										else
											if trim(mid(form1.txtemail.value,instr(1,form1.txtemail.value,"@")+1,1))="" or trim(mid(form1.txtemail.value,instr(1,form1.txtemail.value,"@")+1,1))="." then
												alert "��ʾ: �����ϵ���䲻��!"
												form1.txtemail.focus
		                                      	else
														 if confirm("ȷ���޸����������?") then
																	call form1.submit()
															end if
												     end if
											end if
										end if
									end if
								end if

    end sub
</SCRIPT>

