<?php
session_start();
require("../conn.php");
if($_SESSION[user]!="����Ա")
{
echo"<script>alert('���ȵ�¼');location.href='index.php'</script>";
	exit;
}
$sqltxt="select * from stinfor where st_id=$id";
$res=mysql_query($sqltxt);
$data=mysql_fetch_array($res);

?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ޱ����ĵ�</title>
<base ><LINK href="all.css" rel=StyleSheet type=text/css>
</head>

<body>


<form action="st_modify.php" method=post name="frmRegister">

  <table width="730"  align="center" height=183 border=1 cellpadding="0" cellspacing=0   style='WORD-BREAK: break-all; border-collapse:collapse'>
    <tbody>
            <tr>
              <td align=right height=25 width="21%">�������ƣ�</td>
              <td height=25 width="79%"> <input name="st_name" type="text" id="st_name" value="<?php echo $data["st_name"]?>">
          <input name="st_id"  type="hidden" id="st_id" value="<?php echo $data["st_id"]?>">
        <input name="st_date"  type="hidden" id="st_date" value="<?php echo $data["st_date"]?>">
		<input name=st_state type="hidden" id="st_state" value="<?php echo $data["st_state"]?>" size=15 maxLength=10>
		<input name=st_prename type="hidden" id="st_prename" value="<?php echo $data["st_name"]?>" size=15 maxLength=10>
		</td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">���ż�飺</td>
              <td height=18 width="79%"> <textarea name=st_jj cols=49 rows=8 id="st_jj"><?php echo $data["st_jj"]?></textarea>
        </td>
            </tr>
            <tr>

        <td align=right height=18 width="21%">�����ʺţ�</td>
              <td height=18 width="79%"> <input name=st_ren id="st_ren" value="<?php echo $data["st_ren"]?>" size=15 maxLength=15>
        </td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">�������룺</td>
              <td height=18 width="79%"> <input name=st_pwd type="text" id="st_pwd" value="<?php echo $data["st_pwd"]?>" size=15 maxLength=10>
                <font color=#ff0000>*</font><font color="#009999"><span class=tips_reg style="FONT-SIZE: 9pt">1--10
                �ַ���ֻ�������ֺ�Ӣ����ĸ</span>.</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">��ϵ�绰��</td>
              <td height=18 width="79%"> <input name=st_phone id="st_phone" value="<?php echo $data["st_phone"]?>" size=30 maxLength=20>
          <font color=#ff0000>&nbsp;</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">����ţ�</td>
              <td height=18 width="79%"> <input name=st_address id="st_address" value="<?php echo $data["st_address"]?>" size=30 maxLength=50>
        </td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">����Ժϵרҵ��</td>
              <td height=18 width="79%"> <input name=st_zhy id="st_zhy" value="<?php echo $data["st_zhy"]?>" size=30 maxLength=50>
              </td>
            </tr>
          <tr>
              <td align=right height=18 width="21%">�������䣺</td>
              <td height=18 width="79%"> <input name=st_email id="st_email" value="<?php echo $data["st_email"]?>" size=30 maxLength=50>
        </td>
            </tr>
            <tr>
              <td align=right height=18 width="21%"></td>
              <td height=18   width="79%"> <input name="cmdOK" type="button" value=ȷ���޸�>
                &nbsp;&nbsp;&nbsp;&nbsp;
                <input name="cmddel" type="button" id="cmddel" value=��������> </td>
            </tr>
          </tbody>
        </table>
      </form>
<SCRIPT language=VBScript>
    sub cmdOK_OnClick
		if frmRegister.st_name.value="" then
			alert "��ʾ: ��������Ҫʹ�õ���������!"
			frmRegister.st_name.focus
		else
			if frmRegister.st_pwd.value="" then
				alert "��ʾ: ��������Ҫʹ�õĹ�������!"
				frmRegister.st_pwd.focus
			else
				if frmRegister.st_state.value="" then
					alert "��ʾ: ����״̬����Ϊ��!"
					frmRegister.st_state.focus
				else
					if frmRegister.st_jj.value="" then
						alert "��ʾ: ����д���ż��!"
						frmRegister.st_jj.focus
					else
						if frmRegister.st_ren.value="" then
							alert "��ʾ: ����д��Ҫʹ�õ���ʵ����!"
							frmRegister.st_ren.focus
						else
						    if frmRegister.st_zhy.value="" then
									alert "��ʾ: ����д��Ҫʹ�õ�רҵ!"
									frmRegister.st_zhy.focus
								else
									if frmRegister.st_email.value="" then
										alert "��ʾ: ��������Ҫʹ�õ���ϵ����!"
										frmRegister.st_email.focus
									else
										if instr(1,frmRegister.st_email.value,"@")<2 then
											alert "��ʾ; ��Ҫʹ�õ���ϵ���䲻��!"
											frmRegister.st_email.focus
										else
											if trim(mid(frmRegister.st_email.value,instr(1,frmRegister.st_email.value,"@")+1,1))="" or trim(mid(frmRegister.st_email.value,instr(1,frmRegister.st_email.value,"@")+1,1))="." then
												alert "��ʾ: ��Ҫʹ�õ���ϵ���䲻��!"
												frmRegister.st_email.focus
											else
											    if frmRegister.st_phone.value="" then
													alert "����д��Ҫʹ�õ���ϵ�绰��"
													frmRegister.st_phone.focus
											    else
													if frmRegister.st_address.value="" then
														alert "��ʾ: ����д��Ҫʹ�õ������!"
														frmRegister.st_address.focus
													else
														 if confirm("ȷ���޸�������?") then
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



</body>
</html>