<?php
require("conn.php");
require("top.php");
?>
<html>
<head>
<title>��Աע��</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">


<base ><LINK href="all.css" rel=StyleSheet type=text/css>
</head>

<body bgcolor="#FFFFFF" leftmargin="0" topmargin="10" vlink="#003399" alink="#CCCCCC">
<table width="700"  align="center" border="1" align="center" cellpadding="0" cellspacing="0"  bgcolor="#900000">
  <tr valign="top" bgcolor="#FFFCEC">
    <td width="700" bgcolor="#cbe6b9">
      <div align="center">
        <p><font color="#00702F" >&nbsp;<br>
          ��������д��ĸ�������
          &nbsp;(��</font><font color=#ff0000>*</font><font color="#00702F" >��Ϊ����������)</font></p>
        <p><font color="#FF0000">�ύ����������ĵȴ��᳤��������֪ͨ��лл��</font></p>
      </div>
    </td></tr><tr>
    <td width="604" bgcolor="#E7FDE3">
      <form action=hy_reg_ok.php method=post name="frmRegister">
        <table border=0 cellspacing=1 height=183 width="730"  align="center" cellpadding="0">
          <tbody>
            <tr>
              <td align=right height=18 width="21%">��Ա�سƣ�</td>
              <td height=18 width="79%"> <input name=hy_nch id="hy_nch" size=15 maxLength=15>
                <font color=#ff0000>*</font><font color="#009999">&nbsp;<span class=tips_reg style="FONT-SIZE: 9pt"><font color="#FF0000">һ���ύ�����޸�</font></span></font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">���룺</td>
              <td height=18 width="79%"> <input type="password" name=hy_Pass maxLength=10 size=15>
                <font color=#ff0000>*</font><font color="#009999"><span class=tips_reg style="FONT-SIZE: 9pt">1--10
                �ַ���ֻ�������ֺ�Ӣ����ĸ</span>.</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">ȷ�����룺</td>
              <td height=18 width="79%"> <input type="Password" name=hy_Repass maxLength=10 size=15>
                <font color=#ff0000>*</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">��ʵ������</td>
              <td height=18 width="79%"> <input name=hy_name id="hy_name" value="" size=10 maxLength=10>
                <font color=#ff0000>*</font><font color="#000000"><font color="#009999">��ʵ����<span class=tips_reg style="FONT-SIZE: 9pt"><font color="#FF0000">��һ���ύ�����޸�</font></span></font></font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">ѧ�ţ�</td>
              <td height=18 width="79%"> <input name=hy_number id="hy_number" value="" size=10 maxLength=10>
                <font color=#ff0000>*<span class=tips_reg style="FONT-SIZE: 9pt"></span></font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">Ժϵרҵ�༶��</td>
              <td height=18 width="79%"> <input name=hy_zy id="hy_zy" size=30 maxLength=50>
                <font color=#ff0000>*</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">���᣺</td>
              <td height=18 width="79%"> <input name=hy_address id="hy_address" size=30 maxLength=50>
                <font color=#ff0000>*</font> </td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">�Ա�</td>
              <td height=18 width="79%"> <input name="hy_sex" type="radio" value="boy " checked>
                boy
                <input type="radio" name="hy_sex" value="girl">
                girl <font color=#ff0000>*</font><font color="#009999"><span class=tips_reg style="FONT-SIZE: 9pt"><font color="#FF0000">һ���ύ�����޸�</font></span></font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">��ϵ�绰��</td>
              <td height=18 width="79%"> <input name=hy_phone id="hy_phone" size=15 maxLength=15>
                <font color=#ff0000>*</font> </td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">���������գ�</td>
              <td height=18 width="79%"> <input name=hy_birthday id="hy_birthday" size=11 maxLength=11>
                <font color=#ff0000>*</font> <font color=#ff0000><span class=tips_reg style="FONT-SIZE: 9pt"><font color="#009999">��ʽ��1983-08-17</font></span></font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">�������䣺</td>
              <td height=18 width="79%"> <input name=hy_Email id="hy_Email" value="" size=30 maxLength=50>
                <font color=#ff0000>*</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">��ע��<br>
                ��<font color="#009999">�磺�س������õ�</font>�� <br> </td>
              <td height=18 width="79%"> <textarea name=hy_jl cols=49 rows=8 id="hy_jl">��</textarea>
              </td>
            </tr>
            <tr>
              <td align=right height=18 width="21%"></td>
              <td height=18   width="79%"> <input name="cmdOK" type="submit" value=�ύ����>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input name="cmdReset" type="reset" value=��������> </td>
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
			alert "��ʾ: �������Ա�س�!"
			frmRegister.hy_nch.focus
		else

		if frmRegister.hy_nch.value= "����Ա"  or frmRegister.hy_nch.value= "�᳤" then
			alert "��ʾ: �Ƿ��س�!"
			frmRegister.hy_nch.focus
		else

			if frmRegister.hy_Pass.value="" then
				alert "��ʾ: ����������!"
				frmRegister.hy_Pass.focus
			else
				if frmRegister.hy_Repass.value<>frmRegister.hy_Pass.value then
					alert "��ʾ: �������벻���,������ȷ������!"
					frmRegister.hy_Repass.focus
				else
					if frmRegister.hy_name.value="" then
						alert "��ʾ: �����������ʵ����!"
						frmRegister.hy_name.focus
					else
						if frmRegister.hy_number.value="" then
							alert "��ʾ: ���������ѧ��!"
							frmRegister.hy_number.focus
						else
							if frmRegister.hy_zy.value="" then
								alert "��ʾ: ���������רҵ!"
								frmRegister.hy_zy.focus
							else
								if frmRegister.hy_address.value="" then
									alert "��ʾ: ��������������ַ!"
									frmRegister.hy_address.focus
								else
									if frmRegister.hy_Email.value="" then
										alert "��ʾ: �����������ϵ����!"
										frmRegister.hy_Email.focus
									else
										if instr(1,frmRegister.hy_Email.value,"@")<2 then
											alert "��ʾ; �����ϵ���䲻��!"
											frmRegister.hy_Email.focus
										else
											if trim(mid(frmRegister.hy_Email.value,instr(1,frmRegister.hy_Email.value,"@")+1,1))="" or trim(mid(frmRegister.hy_Email.value,instr(1,frmRegister.hy_Email.value,"@")+1,1))="." then
												alert "��ʾ: �����ϵ���䲻��!"
												frmRegister.hy_Email.focus
											else
											    if frmRegister.hy_phone.value="" then
													alert "�����������ϵ�绰��"
													frmRegister.hy_phone.focus
											    else
													if frmRegister.hy_birthday.value="" then
														alert "��ʾ:�������������!"
														frmRegister.hy_birthday.focus
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
			end if
		end if
    end sub
</SCRIPT>