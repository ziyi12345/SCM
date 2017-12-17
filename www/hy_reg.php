<?php
require("conn.php");
require("top.php");
?>
<html>
<head>
<title>会员注册</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">


<base ><LINK href="all.css" rel=StyleSheet type=text/css>
</head>

<body bgcolor="#FFFFFF" leftmargin="0" topmargin="10" vlink="#003399" alink="#CCCCCC">
<table width="700"  align="center" border="1" align="center" cellpadding="0" cellspacing="0"  bgcolor="#900000">
  <tr valign="top" bgcolor="#FFFCEC">
    <td width="700" bgcolor="#cbe6b9">
      <div align="center">
        <p><font color="#00702F" >&nbsp;<br>
          请认真填写你的个人资料
          &nbsp;(带</font><font color=#ff0000>*</font><font color="#00702F" >号为必填字资料)</font></p>
        <p><font color="#FF0000">提交申请后请耐心等待会长的审批及通知，谢谢！</font></p>
      </div>
    </td></tr><tr>
    <td width="604" bgcolor="#E7FDE3">
      <form action=hy_reg_ok.php method=post name="frmRegister">
        <table border=0 cellspacing=1 height=183 width="730"  align="center" cellpadding="0">
          <tbody>
            <tr>
              <td align=right height=18 width="21%">会员呢称：</td>
              <td height=18 width="79%"> <input name=hy_nch id="hy_nch" size=15 maxLength=15>
                <font color=#ff0000>*</font><font color="#009999">&nbsp;<span class=tips_reg style="FONT-SIZE: 9pt"><font color="#FF0000">一经提交不可修改</font></span></font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">密码：</td>
              <td height=18 width="79%"> <input type="password" name=hy_Pass maxLength=10 size=15>
                <font color=#ff0000>*</font><font color="#009999"><span class=tips_reg style="FONT-SIZE: 9pt">1--10
                字符，只允许数字和英文字母</span>.</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">确认密码：</td>
              <td height=18 width="79%"> <input type="Password" name=hy_Repass maxLength=10 size=15>
                <font color=#ff0000>*</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">真实姓名：</td>
              <td height=18 width="79%"> <input name=hy_name id="hy_name" value="" size=10 maxLength=10>
                <font color=#ff0000>*</font><font color="#000000"><font color="#009999">真实姓名<span class=tips_reg style="FONT-SIZE: 9pt"><font color="#FF0000">，一经提交不可修改</font></span></font></font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">学号：</td>
              <td height=18 width="79%"> <input name=hy_number id="hy_number" value="" size=10 maxLength=10>
                <font color=#ff0000>*<span class=tips_reg style="FONT-SIZE: 9pt"></span></font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">院系专业班级：</td>
              <td height=18 width="79%"> <input name=hy_zy id="hy_zy" size=30 maxLength=50>
                <font color=#ff0000>*</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">宿舍：</td>
              <td height=18 width="79%"> <input name=hy_address id="hy_address" size=30 maxLength=50>
                <font color=#ff0000>*</font> </td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">性别：</td>
              <td height=18 width="79%"> <input name="hy_sex" type="radio" value="boy " checked>
                boy
                <input type="radio" name="hy_sex" value="girl">
                girl <font color=#ff0000>*</font><font color="#009999"><span class=tips_reg style="FONT-SIZE: 9pt"><font color="#FF0000">一经提交不可修改</font></span></font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">联系电话：</td>
              <td height=18 width="79%"> <input name=hy_phone id="hy_phone" size=15 maxLength=15>
                <font color=#ff0000>*</font> </td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">出生年月日：</td>
              <td height=18 width="79%"> <input name=hy_birthday id="hy_birthday" size=11 maxLength=11>
                <font color=#ff0000>*</font> <font color=#ff0000><span class=tips_reg style="FONT-SIZE: 9pt"><font color="#009999">格式：1983-08-17</font></span></font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">电子邮箱：</td>
              <td height=18 width="79%"> <input name=hy_Email id="hy_Email" value="" size=30 maxLength=50>
                <font color=#ff0000>*</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">备注：<br>
                （<font color="#009999">如：特长、爱好等</font>） <br> </td>
              <td height=18 width="79%"> <textarea name=hy_jl cols=49 rows=8 id="hy_jl">无</textarea>
              </td>
            </tr>
            <tr>
              <td align=right height=18 width="21%"></td>
              <td height=18   width="79%"> <input name="cmdOK" type="submit" value=提交资料>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input name="cmdReset" type="reset" value=重置资料> </td>
            </tr>
          </tbody>
        </table>
      </form>
    </td>
  </tr>
</table>

</body>
</html>

<SCRIPT language=VBScript>
    sub cmdOK_OnClick
		if frmRegister.hy_nch.value="" then
			alert "提示: 请输入会员呢称!"
			frmRegister.hy_nch.focus
		else

		if frmRegister.hy_nch.value= "管理员"  or frmRegister.hy_nch.value= "会长" then
			alert "提示: 非法呢称!"
			frmRegister.hy_nch.focus
		else

			if frmRegister.hy_Pass.value="" then
				alert "提示: 请输入密码!"
				frmRegister.hy_Pass.focus
			else
				if frmRegister.hy_Repass.value<>frmRegister.hy_Pass.value then
					alert "提示: 两次密码不相符,请重新确认密码!"
					frmRegister.hy_Repass.focus
				else
					if frmRegister.hy_name.value="" then
						alert "提示: 请输入你的真实姓名!"
						frmRegister.hy_name.focus
					else
						if frmRegister.hy_number.value="" then
							alert "提示: 请输入你的学号!"
							frmRegister.hy_number.focus
						else
							if frmRegister.hy_zy.value="" then
								alert "提示: 请输入你的专业!"
								frmRegister.hy_zy.focus
							else
								if frmRegister.hy_address.value="" then
									alert "提示: 请输入你的宿舍地址!"
									frmRegister.hy_address.focus
								else
									if frmRegister.hy_Email.value="" then
										alert "提示: 请输入你的联系邮箱!"
										frmRegister.hy_Email.focus
									else
										if instr(1,frmRegister.hy_Email.value,"@")<2 then
											alert "提示; 你的联系邮箱不对!"
											frmRegister.hy_Email.focus
										else
											if trim(mid(frmRegister.hy_Email.value,instr(1,frmRegister.hy_Email.value,"@")+1,1))="" or trim(mid(frmRegister.hy_Email.value,instr(1,frmRegister.hy_Email.value,"@")+1,1))="." then
												alert "提示: 你的联系邮箱不对!"
												frmRegister.hy_Email.focus
											else
											    if frmRegister.hy_phone.value="" then
													alert "请输入你的联系电话！"
													frmRegister.hy_phone.focus
											    else
													if frmRegister.hy_birthday.value="" then
														alert "提示:请输入你的生日!"
														frmRegister.hy_birthday.focus
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
			end if
		end if
    end sub
</SCRIPT>