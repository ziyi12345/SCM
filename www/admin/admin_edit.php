<?php
require("../conn.php");
session_start();
if($_SESSION[user]!="管理员")
{
echo"<script>alert('请先登录');location.href='index.php'</script>";
	exit;
}
$sql="select * from admin";
$res=mysql_query($sql);
$rsUser=mysql_fetch_array($res);
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>无标题文档</title>
<base ><LINK href="all.css" rel=StyleSheet type=text/css>
</head>

<body>

<form name="form1" method="post" action="admin_editok.php">

  <table width="730"  align="center" border="1" cellspacing="0" >
    <tr>
      <td align="right">帐号：</td>
    <td><input name="txtname" type="text" id="txtname" value="<?php echo $rsUser["admin_name"]?>" size="15" maxlength="15"></td>
  </tr>
  <tr>
      <td align="right">密&nbsp; 码:</td>
    <td><input name="txtpwd" type="text" id="txtpwd2" value="<?php echo $rsUser["admin_pwd"]?>" size="15" maxlength="15"></td>
  </tr>
  <tr>
      <td align="right">Email：</td>
    <td><input name="txtemail" type="text" id="txtemail3" value="<?php echo $rsUser["admin_email"]?>" size="20" maxlength="30"></td>
  </tr>
  <tr>
      <td align="right">&nbsp;</td>
    <td><input name="cmdOK" type="button" id="cmdOK2" value="修改">
      <input name="cmdNo" type="reset" id="cmdNo" value="重置"></td>
  </tr>
</table>

</form></body>
</html>

<SCRIPT language=VBScript>
    sub cmdOK_OnClick
		if form1.txtname.value="" then
			alert "提示: 请输入管理帐号!"
			form1.txtname.focus
		else
			if form1.txtpwd.value="" then
				alert "提示: 请输入管理密码!"
				form1.txtpwd.focus
			else
                  if form1.txtemail.value="" then
										alert "提示: 请输入你的联系邮箱!"
										form1.txtemail.focus
									else
										if instr(1,form1.txtemail.value,"@")<2 then
											alert "提示; 你的联系邮箱不对!"
											form1.txtemail.focus
										else
											if trim(mid(form1.txtemail.value,instr(1,form1.txtemail.value,"@")+1,1))="" or trim(mid(form1.txtemail.value,instr(1,form1.txtemail.value,"@")+1,1))="." then
												alert "提示: 你的联系邮箱不对!"
												form1.txtemail.focus
		                                      	else
														 if confirm("确定修改你的资料吗?") then
																	call form1.submit()
															end if
												     end if
											end if
										end if
									end if
								end if

    end sub
</SCRIPT>

