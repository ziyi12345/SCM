<?php
session_start();
?>
<html>
<head>
<title>社团申请</title>
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
      <form action=st_shqok.php method=post name="frmRegister">
        <table border=0 cellspacing=1 height=183 width="730"  align="center" cellpadding="0">
          <tbody>
            <tr>
              <td align=right height=25 width="21%">社团名称：</td>
              <td height=25 width="79%"> <input name="txt_name" type="text" id="txt_name">
                <font color=#ff0000>*</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">社团简介：</td>
              <td height=18 width="79%"> <textarea name=txt_jj cols=49 rows=8 id="txt_jj"></textarea>
                <font color=#ff0000>*</font> <font color="#009999">活动宗旨目的等</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">申请人：</td>
              <td height=18 width="79%"> <input name=txt_ren id="txt_ren" size=15 maxLength=15>
                <font color=#ff0000>*</font><font color="#009999">真实姓名.作为管理帐号使用</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">性别：</td>
              <td height=18 width="79%"> <input name="txt_sex" type="radio" value="boy " checked>
                boy
                <input type="radio" name="txt_sex" value="girl">
                girl <font color=#ff0000>*</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">管理密码：</td>
              <td height=18 width="79%"> <input name=txt_pwd type="password" id="txt_pwd" size=15 maxLength=10>
                <font color=#ff0000>*</font><font color="#009999"><span class=tips_reg style="FONT-SIZE: 9pt">1--10
                字符，只允许数字和英文字母</span>.</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">确认密码：</td>
              <td height=18 width="79%"> <input name=txt_pwd1 type="Password" id="txt_pwd1" size=15 maxLength=10>
                <font color=#ff0000>*</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">联系电话：</td>
              <td height=18 width="79%"> <input name=txt_phone id="txt_phone" value="" size=30 maxLength=20>
                <font color=#ff0000>*<span class=tips_reg style="FONT-SIZE: 9pt"></span></font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">宿舍：</td>
              <td height=18 width="79%"> <input name=txt_address id="txt_address" size=30 maxLength=50>
                <font color=#ff0000>*</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">所在院系专业：</td>
              <td height=18 width="79%"> <input name=txt_zhy id="txt_zhy" size=30 maxLength=50>
                <font color=#ff0000>*</font> </td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">电子邮箱：</td>
              <td height=18 width="79%"> <input name=txt_email id="txt_email" value="" size=30 maxLength=50>
                <font color=#ff0000>*</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%"></td>
              <td height=18   width="79%"> <input name="cmdOK" type="submit" value=提交申请>
                &nbsp;&nbsp;&nbsp;&nbsp; <input name="cmdReset" type="reset" value=重置资料>
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
    '提交资料时检测必填字段
    sub cmdOK_OnClick
		if frmRegister.txt_name.value="" then
			alert "提示: 请输入你要申请的社团名称!"
			frmRegister.txt_name.focus
		else
			if frmRegister.txt_pwd.value="" then
				alert "提示: 请输入你要使用的管理密码!"
				frmRegister.txt_pwd.focus
			else
				if frmRegister.txt_pwd1.value<>frmRegister.txt_pwd.value then
					alert "提示: 两次密码不相符,请重新确认密码!"
					frmRegister.txt_pwd1.focus
				else
					if frmRegister.txt_jj.value="" then
						alert "提示: 请填写社团简介!"
						frmRegister.txt_jj.focus
					else
						if frmRegister.txt_ren.value="" then
							alert "提示: 请填写你的真实姓名!"
							frmRegister.txt_ren.focus
						else
						    if frmRegister.txt_zhy.value="" then
									alert "提示: 请填写你的专业!"
									frmRegister.txt_zhy.focus
								else
									if frmRegister.txt_email.value="" then
										alert "提示: 请输入你的联系邮箱!"
										frmRegister.txt_email.focus
									else
										if instr(1,frmRegister.txt_email.value,"@")<2 then
											alert "提示; 你的联系邮箱不对!"
											frmRegister.txt_email.focus
										else
											if trim(mid(frmRegister.txt_email.value,instr(1,frmRegister.txt_email.value,"@")+1,1))="" or trim(mid(frmRegister.txt_email.value,instr(1,frmRegister.txt_email.value,"@")+1,1))="." then
												alert "提示: 你的联系邮箱不对!"
												frmRegister.txt_email.focus
											else
											    if frmRegister.txt_phone.value="" then
													alert "请填写你的联系电话！"
													frmRegister.txt_phone.focus
											    else
													if frmRegister.txt_address.value="" then
														alert "提示: 请填写你的宿舍号!"
														frmRegister.txt_address.focus
													else
														 if confirm("确定提交你的资料吗?") then
																	call frmRegister.submit()
															end if
												     end if
											end if
										end if
									end if
								end if
							end if
						end if
					end if
				end if
			end if
		end if
    end sub
</SCRIPT>




