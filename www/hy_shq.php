<?php
require("top.php");
?><html>
<head>
<title>�� Ա ע ��</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">


<base ><LINK href="all.css" rel=StyleSheet type=text/css>
</head>

<body bgcolor="#FFFFFF" leftmargin="0" topmargin="10" vlink="#003399" alink="#CCCCCC">
<div align="right"> </div>
<table width="700"  align="center" border="1" align="center" cellpadding="0" cellspacing="0"  bgcolor="#900000">
  <tr valign="top" bgcolor="#FFFCEC">
    <td width="161" bgcolor="#cbe6b9">
      <div align="center">
        <p><font color="#00702F" >&nbsp;<br>
          ��������д��ĸ�������<br>
          &nbsp;(��</font><font color=#ff0000>*</font><font color="#00702F" >��Ϊ����������)</font></p>
        <p><font color="#FF0000">�ύ����������ĵȴ��᳤��������֪ͨ��лл��</font></p>
      </div>
    </td>
    <td width="604" bgcolor="#E7FDE3">
      <form action=hy_shq_ok.php method=post name="frmRegister">
        <table border=0 cellspacing=1 height=183 width="730"  align="center" cellpadding="0">
          <tbody>
            <tr>
              <td align=right height=18 width="21%">��Ա�سƣ�</td>
              <td height=18 width="79%"> <input name=txtnch id="txtnch" size=15 maxLength=15>
                <font color=#ff0000>*</font><font color="#009999">&nbsp;<span class=tips_reg style="FONT-SIZE: 9pt"><font color="#FF0000">һ���ύ�����޸�</font></span></font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">���룺</td>
              <td height=18 width="79%"> <input type="password" name=txtPass maxLength=10 size=15>
                <font color=#ff0000>*</font><font color="#009999"><span class=tips_reg style="FONT-SIZE: 9pt">1--10
                �ַ���ֻ�������ֺ�Ӣ����ĸ</span>.</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">ȷ�����룺</td>
              <td height=18 width="79%"> <input type="Password" name=txtRepass maxLength=10 size=15>
                <font color=#ff0000>*</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">��ʵ������</td>
              <td height=18 width="79%"> <input name=txtname id="txtname" value="" size=10 maxLength=10>
                <font color=#ff0000>*</font><font color="#000000"><font color="#009999">��ʵ����<span class=tips_reg style="FONT-SIZE: 9pt"><font color="#FF0000">��һ���ύ�����޸�</font></span></font></font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">ѧ�ţ�</td>
              <td height=18 width="79%"> <input name=txtnumber id="txtnumber" value="" size=10 maxLength=10>
                <font color=#ff0000>*<span class=tips_reg style="FONT-SIZE: 9pt"></span></font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">Ժϵרҵ�༶��</td>
              <td height=18 width="79%"> <input name=txtzy id="txtzy" size=30 maxLength=50>
                <font color=#ff0000>*</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">���᣺</td>
              <td height=18 width="79%"> <input name=txtaddress id="txtaddress" size=30 maxLength=50>
                <font color=#ff0000>*</font> </td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">�Ա�</td>
              <td height=18 width="79%"> <input name="txtsex" type="radio" value="boy " checked>
                boy
                <input type="radio" name="txtsex" value="girl">
                girl <font color=#ff0000>*</font><font color="#009999"><span class=tips_reg style="FONT-SIZE: 9pt"><font color="#FF0000">һ���ύ�����޸�</font></span></font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">��ϵ�绰��</td>
              <td height=18 width="79%"> <input name=txtphone id="txtphone" size=15 maxLength=15>
                <font color=#ff0000>*</font> </td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">���������գ�</td>
              <td height=18 width="79%"> <input name=txtbirthday id="txtbirthday" size=11 maxLength=11>
                <font color=#ff0000>*</font> <font color=#ff0000><span class=tips_reg style="FONT-SIZE: 9pt"><font color="#009999">��ʽ��1983-08-17</font></span></font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">�������䣺</td>
              <td height=18 width="79%"> <input name=txtEmail id="txtEmail" value="" size=30 maxLength=50>
                <font color=#ff0000>*</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">��ע��<br>
                ��<font color="#009999">�磺�س������õ�</font>�� <br> </td>
              <td height=18 width="79%"> <textarea name=txtjl cols=49 rows=8 id="txtjl">��</textarea>
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
		if frmRegister.txtnch.value="" then
			alert "��ʾ: �������Ա�س�!"
			frmRegister.txtnch.focus
		else

		if frmRegister.txtnch.value= "����Ա"  or frmRegister.txtnch.value= "�᳤" then
			alert "��ʾ: �Ƿ��س�!"
			frmRegister.txtnch.focus
		else

			if frmRegister.txtPass.value="" then
				alert "��ʾ: ����������!"
				frmRegister.txtPass.focus
			else
				if frmRegister.txtRepass.value<>frmRegister.txtPass.value then
					alert "��ʾ: �������벻���,������ȷ������!"
					frmRegister.txtRepass.focus
				else
					if frmRegister.txtname.value="" then
						alert "��ʾ: �����������ʵ����!"
						frmRegister.txtname.focus
					else
						if frmRegister.txtnumber.value="" then
							alert "��ʾ: ���������ѧ��!"
							frmRegister.txtnumber.focus
						else
							if frmRegister.txtzy.value="" then
								alert "��ʾ: ���������רҵ!"
								frmRegister.txtzy.focus
							else
								if frmRegister.txtaddress.value="" then
									alert "��ʾ: ��������������ַ!"
									frmRegister.txtaddress.focus
								else
									if frmRegister.txtEmail.value="" then
										alert "��ʾ: �����������ϵ����!"
										frmRegister.txtEmail.focus
									else
										if instr(1,frmRegister.txtEmail.value,"@")<2 then
											alert "��ʾ; �����ϵ���䲻��!"
											frmRegister.txtEmail.focus
										else
											if trim(mid(frmRegister.txtEmail.value,instr(1,frmRegister.txtEmail.value,"@")+1,1))="" or trim(mid(frmRegister.txtEmail.value,instr(1,frmRegister.txtEmail.value,"@")+1,1))="." then
												alert "��ʾ: �����ϵ���䲻��!"
												frmRegister.txtEmail.focus
											else
											    if frmRegister.txtphone.value="" then
													alert "�����������ϵ�绰��"
													frmRegister.txtphone.focus
											    else
													if frmRegister.txtbirthday.value="" then
														alert "��ʾ:�������������!"
														frmRegister.txtbirthday.focus
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