<HTML><HEAD><TITLE>学生社团管理系统</TITLE>

<meta http-equiv="Content-Language" content="zh-cn">
<meta http-equiv="Content-Type" content="text/html; charset=gb2312"><LINK
href="../images/default.css" type=text/css rel=stylesheet>
<Script LANGUAGE="JavaScript">
if(self!=top){top.location=self.location;}
</script>

<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-size: 24pt;
}
-->
</style>
</HEAD>
<BODY text=#333333 bgColor=#ffffff leftMargin=2 topMargin=2 MARGINHEIGHT="0"
MARGINWIDTH="0">
<DIV align=center><LINK href="../images/default.css" type=text/css
rel=stylesheet>


<TABLE height=70 cellSpacing=0 cellPadding=6 width=997 bgColor=#003333
  border=0><TBODY>
  <TR>
    <TD vAlign=bottom align=right width=209></TD>
	  <TD width=574 align=center vAlign=middle ><span class="style5 style1"> 福州大学学生社团管理系统</span></TD>
    <TD class=normaltextwhite vAlign=bottom align=right width=178><span class="style3"></span>
      <DIV id=time></DIV><SCRIPT>setInterval("time.innerHTML=new Date().toLocaleString()+' 星期'+'日一二三四五六'.charAt(new Date().getDay());",1000);
</SCRIPT>    </TD>

  </TR>
</TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width=997 border=0>
  <TBODY>
  <TR>
    <TD bgColor=#ffffff height=1><IMG height=1
      src="../images/1pix.gif" width=1 border=0></TD></TR></TBODY></TABLE>

<table cellspacing=0 cellpadding=6 width="97%" border=0>
  <td width="23%"><tbody>
  </TBODY>
</table>


<TABLE cellSpacing=0 cellPadding=0 width=997 border=0>
  <TBODY>
  <TR>
    <TD bgColor=#ffffff height=1><IMG height=1
      src="../images/1pix.gif" width=1 border=0></TD></TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width=997 border=0>
  <TBODY>
  <TR>
    <TD><IMG height=5 src="../images/line2.gif" width=997
  border=0></TD></TR></TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width=997 border=0>
  <TBODY>
  <TR>
    <TD bgColor=#ffffff height=1><IMG height=1
      src="../images/1pix.gif" width=1
border=0></TD></TR></TBODY></TABLE>

<TABLE cellSpacing=0 cellPadding=0 width=997 bgColor=#eef2ee
 border=0>
  <td width="1%"><TBODY>
  <TR>

    <TD vAlign=top>&nbsp;</TD>
    <TD vAlign=top>&nbsp;</TD>
    <TD vAlign=top height=80><IMG height=3 src="../images/left6.gif"
      width=205 border=0></TD>

  <TR>  </TBODY></TABLE>
<TABLE cellSpacing=0 cellPadding=0 width=997 bgColor=#eef2ee
background=../images/bg.gif border=0>
  <td width="1%"><TBODY>
  <TR>
    <TD vAlign=top rowSpan=3 weight="3"><IMG height=350
      src="../images/left5.gif" width=3 border=0></TD>
    <TD vAlign=top>&nbsp;</TD>
    <TD vAlign=top>&nbsp;</TD>
    <TD vAlign=top height=9>&nbsp;</TD>
    <TD width="1%" rowSpan=3 vAlign=bottom weight="3"><IMG height=350
      src="../images/left7.gif" width=3 border=0></TD></TR>
  <TR>
    <TD vAlign=top align=middle width="31%">&nbsp;</TD>
    <TD width="33%" align=middle vAlign=top><form name="FormLogin" action="check_admin.php" method=post  >
<table cellspacing=0 cellpadding=0 width="100%" border=0>
        <tbody>
          <tr>
            <td valign=bottom align=right width=12 height=12><img
                  height=12 src="../images/right1.gif" width=12
                  border=0></td>
            <td bgcolor=#b1c0a1 colspan=2 height=12><img height=1
                  src="../images/1pix.gif" width=1 border=0></td>
            <td valign=bottom align=left width=12 height=12><img height=12
                  src="../images/right2.gif" width=12 border=0></td>
          </tr>
          <tr>
            <td class=backcolor></td>
            <td colspan=2 align="center" class=backcolor><font
                  class=titlegreen>管理员登录</font> <br>             </td>
            <td class=backcolor></td>
          </tr>
          <tr>
            <td class=backcolor></td>
            <td class=backcolor valign=top align=middle colspan=2
                  height=30><hr color=#ffffff noshade size=1>
            </td>
            <td class=backcolor></td>
          </tr>
          <tr>
            <td class=backcolor></td>
            <td class=backcolor colspan=2>输入您的用户名和密码</td>
            <td class=backcolor></td>
          </tr>
          <tr>
            <td class=backcolor colspan=4 height=9></td>
          </tr>
        <p class=errormsg></p>

          <tr>
            <td class=backcolor></td>
            <td class=backcolor nowrap align=right width="30%">用户名：</td>
            <td class=backcolor><input class=input size=28
                  name=userLoginName></td>
            <td class=backcolor></td>
          </tr>
          <tr>
            <td class=backcolor></td>
            <td class=backcolor nowrap align=right width="30%">密码：</td>
            <td class=backcolor><input class=input type=password size=28
                  name=userPassword></td>
            <td class=backcolor></td>
          </tr>
         <!-- <tr>
            <td class=backcolor></td>
            <td class=backcolor nowrap align=right width="30%">选择身份：</td>
            <td class=backcolor><input name="radio" type="radio" id="radio" value="管理员" checked>
              <label for="radio">管理员
                <input type="radio" name="radio" id="radio" value="会长">
                社团会长
              </label></td>
            <td class=backcolor></td>
          </tr>
		  -->
          <tr>
            <td class=backcolor></td>
            <td class=backcolor align=right width="30%" td>
            <td class=backcolor height=45><button type=submit style="width: 50px; height: 20px">登 陆</button>&nbsp;&nbsp;

            </td>
            <td class=backcolor></td>
          </tr>

        <tr>
          <td class=backcolor></td>
          <td class=backcolor valign=bottom align=middle colspan=2
                height=20><a href="../index.php">返回首页</a>
            <hr color=#ffffff noshade size=1>
          </td>
          <td class=backcolor></td>
        </tr>
        <tr>
          <td class=backcolor></td>
          <td class=backcolor align=right width="30%" td>
          <td class=backcolor align=right height=24>&nbsp;</td>
          <td class=backcolor></td>
        </tr>
        <tr>
          <td valign=top align=right width=12 height=12><img height=12
                  src="../images/right3.gif" width=12 border=0></td>
          <td bgcolor=#b1c0a1 colspan=2 height=12><img height=1
                  src="../images/1pix.gif" width=1 border=0></td>
          <td valign=top align=left width=12 height=12><img height=12
                  src="../images/right4.gif" width=12
              border=0></td>
        </tr>

    </table>
	</form></TD>
    <TD vAlign=top align=middle width="34%">&nbsp;      </TD>
  </TR>
  <TR>
    <TD vAlign=bottom align=right>&nbsp;</TD>
    <TD vAlign=bottom align=right></TD>
    <TD vAlign=bottom align=right height=9><IMG height=3
      src="../images/left8.gif"
border=0></TD></TR></TBODY></TABLE>



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
    <TD class=smalltext>&nbsp; </TD>
    
  </TR></TBODY></TABLE></DIV></BODY></HTML>
