<?php
session_start();
?>
<html>
<head>
<title>��������</title>
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
              <td align=right height=25 width="21%">�������ƣ�</td>
              <td height=25 width="79%"> <input name="txt_name" type="text" id="txt_name">
                <font color=#ff0000>*</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">���ż�飺</td>
              <td height=18 width="79%"> <textarea name=txt_jj cols=49 rows=8 id="txt_jj"></textarea>
                <font color=#ff0000>*</font> <font color="#009999">���ּĿ�ĵ�</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">�����ˣ�</td>
              <td height=18 width="79%"> <input name=txt_ren id="txt_ren" size=15 maxLength=15>
                <font color=#ff0000>*</font><font color="#009999">��ʵ����.��Ϊ�����ʺ�ʹ��</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">�Ա�</td>
              <td height=18 width="79%"> <input name="txt_sex" type="radio" value="boy " checked>
                boy
                <input type="radio" name="txt_sex" value="girl">
                girl <font color=#ff0000>*</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">�������룺</td>
              <td height=18 width="79%"> <input name=txt_pwd type="password" id="txt_pwd" size=15 maxLength=10>
                <font color=#ff0000>*</font><font color="#009999"><span class=tips_reg style="FONT-SIZE: 9pt">1--10
                �ַ���ֻ�������ֺ�Ӣ����ĸ</span>.</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">ȷ�����룺</td>
              <td height=18 width="79%"> <input name=txt_pwd1 type="Password" id="txt_pwd1" size=15 maxLength=10>
                <font color=#ff0000>*</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">��ϵ�绰��</td>
              <td height=18 width="79%"> <input name=txt_phone id="txt_phone" value="" size=30 maxLength=20>
                <font color=#ff0000>*<span class=tips_reg style="FONT-SIZE: 9pt"></span></font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">���᣺</td>
              <td height=18 width="79%"> <input name=txt_address id="txt_address" size=30 maxLength=50>
                <font color=#ff0000>*</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">����Ժϵרҵ��</td>
              <td height=18 width="79%"> <input name=txt_zhy id="txt_zhy" size=30 maxLength=50>
                <font color=#ff0000>*</font> </td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">�������䣺</td>
              <td height=18 width="79%"> <input name=txt_email id="txt_email" value="" size=30 maxLength=50>
                <font color=#ff0000>*</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%"></td>
              <td height=18   width="79%"> <input name="cmdOK" type="submit" value=�ύ����>
                &nbsp;&nbsp;&nbsp;&nbsp; <input name="cmdReset" type="reset" value=��������>
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
    '�ύ����ʱ�������ֶ�
    sub cmdOK_OnClick
		if frmRegister.txt_name.value="" then
			alert "��ʾ: ��������Ҫ�������������!"
			frmRegister.txt_name.focus
		else
			if frmRegister.txt_pwd.value="" then
				alert "��ʾ: ��������Ҫʹ�õĹ�������!"
				frmRegister.txt_pwd.focus
			else
				if frmRegister.txt_pwd1.value<>frmRegister.txt_pwd.value then
					alert "��ʾ: �������벻���,������ȷ������!"
					frmRegister.txt_pwd1.focus
				else
					if frmRegister.txt_jj.value="" then
						alert "��ʾ: ����д���ż��!"
						frmRegister.txt_jj.focus
					else
						if frmRegister.txt_ren.value="" then
							alert "��ʾ: ����д�����ʵ����!"
							frmRegister.txt_ren.focus
						else
						    if frmRegister.txt_zhy.value="" then
									alert "��ʾ: ����д���רҵ!"
									frmRegister.txt_zhy.focus
								else
									if frmRegister.txt_email.value="" then
										alert "��ʾ: �����������ϵ����!"
										frmRegister.txt_email.focus
									else
										if instr(1,frmRegister.txt_email.value,"@")<2 then
											alert "��ʾ; �����ϵ���䲻��!"
											frmRegister.txt_email.focus
										else
											if trim(mid(frmRegister.txt_email.value,instr(1,frmRegister.txt_email.value,"@")+1,1))="" or trim(mid(frmRegister.txt_email.value,instr(1,frmRegister.txt_email.value,"@")+1,1))="." then
												alert "��ʾ: �����ϵ���䲻��!"
												frmRegister.txt_email.focus
											else
											    if frmRegister.txt_phone.value="" then
													alert "����д�����ϵ�绰��"
													frmRegister.txt_phone.focus
											    else
													if frmRegister.txt_address.value="" then
														alert "��ʾ: ����д��������!"
														frmRegister.txt_address.focus
													else
														 if confirm("ȷ���ύ���������?") then
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




