<?php
session_start();
require("conn.php");
$st_name=$_SESSION["stname"];
$sql="select * from stinfor where st_name='$st_name'";
echo $sql;
$res=mysql_query($sql);

$data=mysql_fetch_array($res);
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>社团资料修改</title>
<base ><LINK href="all.css" rel=StyleSheet type=text/css>
</head>

<body>

<?php
require("top.php");
?>
<table width="730"  align="center" height=183 border=1 cellpadding="0" cellspacing=0  bgcolor="#E7FDE3"  style='WORD-BREAK: break-all; border-collapse:collapse'>
  <form action="hz_st_modify.php" method=post name="frmRegister">  <tbody>
            <tr>
              <td align=right height=25 width="21%">社团名称：</td>
              <td height=25 width="79%"> <?php echo $data["st_name"]?>
    		</td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">社团简介：</td>

        <td height=18 width="79%"> <textarea name=txt_jj cols=49 rows=8 id="txt_jj"><?php echo $data["st_jj"]?></textarea></td>
            </tr>
            <tr>

        <td align=right height=18 width="21%">管理帐号：</td>
              <td height=18 width="79%"> <input name=txt_ren id="txt_ren" value="<?php echo $data["st_ren"]?>" size=15 maxLength=15 >
        </td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">管理密码：</td>
              <td height=18 width="79%"> <input name=txt_pwd type="text" id="txt_pwd" value="<?php echo $data["st_pwd"]?>" size=15 maxLength=10>
                <font color=#ff0000>*</font><font color="#009999"><span class=tips_reg style="FONT-SIZE: 9pt">1--10
                字符，只允许数字和英文字母</span>.</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">联系电话：</td>
              <td height=18 width="79%"> <input name=txt_phone id="txt_phone" value="<?php echo $data["st_phone"]?>" size=30 maxLength=20>
          <font color=#ff0000>&nbsp;</font></td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">宿舍号：</td>
              <td height=18 width="79%"> <input name=txt_address id="txt_address" value="<?php echo $data["st_address"]?>" size=30 maxLength=50>
        </td>
            </tr>
            <tr>
              <td align=right height=18 width="21%">所在院系专业：</td>
              <td height=18 width="79%"> <input name=txt_zhy id="txt_zhy" value="<?php echo $data["st_zhy"]?>" size=30 maxLength=50>
              </td>
            </tr>
          <tr>
              <td align=right height=18 width="21%">电子邮箱：</td>
              <td height=18 width="79%"> <input name=txt_email id="txt_email" value="<?php echo $data["st_email"]?>" size=30 maxLength=50>
        </td>
            </tr>
            <tr>
              <td align=right height=18 width="21%"></td>

        <td   width="79%" height=18 align="center">
          <input name="cmdOK" type="submit" value=确定修改> &nbsp;&nbsp;&nbsp;&nbsp; </td>
            </tr>
          </tbody>      </form>
        </table>

</body>
</html>
<SCRIPT language=VBScript>
    sub cmdOK_OnClick
			if frmRegister.txt_pwd.value="" then
				alert "提示: 请输入你要使用的管理密码!"
				frmRegister.txt_pwd.focus
			else
					if frmRegister.txt_jj.value="" then
						alert "提示: 请填写社团简介!"
						frmRegister.txt_jj.focus
					else
						if frmRegister.txt_ren.value="" then
							alert "提示: 请填写你要使用的真实姓名!"
							frmRegister.txt_ren.focus
						else
						    if frmRegister.txt_zhy.value="" then
									alert "提示: 请填写你要使用的专业!"
									frmRegister.txt_zhy.focus
								else
									if frmRegister.txt_email.value="" then
										alert "提示: 请输入你要使用的联系邮箱!"
										frmRegister.txt_email.focus
									else
										if instr(1,frmRegister.txt_email.value,"@")<2 then
											alert "提示; 你要使用的联系邮箱不对!"
											frmRegister.txt_email.focus
										else
											if trim(mid(frmRegister.txt_email.value,instr(1,frmRegister.txt_email.value,"@")+1,1))="" or trim(mid(frmRegister.txt_email.value,instr(1,frmRegister.txt_email.value,"@")+1,1))="." then
												alert "提示: 你要使用的联系邮箱不对!"
												frmRegister.txt_email.focus
											else
											    if frmRegister.txt_phone.value="" then
													alert "请填写你要使用的联系电话！"
													frmRegister.txt_phone.focus
											    else
													if frmRegister.txt_address.value="" then
														alert "提示: 请填写你要使用的宿舍号!"
														frmRegister.txt_address.focus
													else
														 if confirm("确定修改资料吗?") then
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
    end sub

</SCRIPT>
