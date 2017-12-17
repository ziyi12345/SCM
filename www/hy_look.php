
<?php
require("conn.php");
?>
<%
id=request("hyid")
sqltxt="select * from hydsh where hy_nch='"&id&"'"
set rs2 = conn.execute(sqltxt)
if rs2.eof then
response.write "<script language=JavaScript>{window.alert('资料被屏蔽，或已被删除！');window.history.go(-1)}</script>"
response.end
end if
%>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>无标题文档</title>
<base ><LINK href="all.css" rel=StyleSheet type=text/css>
</head>
<script language=JavaScript>
function winclose()
{
window.history.go(-1);
}
</script>
<body>


<table width="730"  align="center" height=183 border=1 cellpadding="0" cellspacing=0 >
  <tbody>
    <tr bgcolor="#cbe6b9">
      <td align=right height=18 width="21%">会员呢称：</td>
      <td height=18 width="79%"> <%=rs2("hy_nch"]?> </td>
    </tr>
    <tr bgcolor="#E7FDE3">
      <td align=right height=18 width="21%">真实姓名：</td>
      <td height=18 width="79%"> <%=rs2("hy_name"]?> </td>
    </tr>
    <tr bgcolor="#cbe6b9">
      <td align=right height=18 width="21%">学号：</td>
      <td height=18 width="79%"> <%=rs2("hy_number"]?> <font color=#ff0000>&nbsp;</font></td>
    </tr>
    <tr bgcolor="#E7FDE3">
      <td align=right height=18 width="21%">院系专业班级：</td>
      <td height=18 width="79%"> <%=rs2("hy_zy"]?> </td>
    </tr>
    <tr bgcolor="#cbe6b9">
      <td align=right height=18 width="21%">宿舍：</td>
      <td height=18 width="79%"> <%=rs2("hy_address"]?> </td>
    </tr>
    <tr bgcolor="#E7FDE3">
      <td align=right height=18 width="21%">性别：</td>
      <td height=18 width="79%"> <%=rs2("hy_sex"]?> </td>
    </tr>
    <tr bgcolor="#cbe6b9">
      <td align=right height=18 width="21%">联系电话：</td>
      <td height=18 width="79%"> <%=rs2("hy_phone"]?> </td>
    </tr>
    <tr bgcolor="#E7FDE3">
      <td align=right height=18 width="21%">出生年月日：</td>
      <td height=18 width="79%"> <%=rs2("hy_birthday"]?> </td>
    </tr>
    <tr bgcolor="#cbe6b9">
      <td align=right height=18 width="21%">电子邮箱：</td>
      <td height=18 width="79%"> <%=rs2("hy_email"]?> </td>
    </tr>
    <tr bgcolor="#E7FDE3">
      <td width="21%" height=18 align=right valign="top">备注： </td>
      <td height=18 width="79%"> <%=rs2("hy_jl"]?> </td>
    </tr>
    <%	rs2.close
sqltxt="select hy_st from hyinfor where hy_nch='"&id&"'"
set rs2 = conn.execute(sqltxt)
if not rs2.eof then
sht=rs2("hy_st")
else
sht="还未参加任何社团~"
end if
%>
    <tr bgcolor="#cbe6b9">
      <td align=right height=18 width="21%">所在社团：</td>
      <td height=18 width="79%"><%=sht%> </td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td width="21%" height=18 align=right>&nbsp;</td>
      <td   width="79%" height=18 align="center"> <a href="#" onClick="winclose()"><font color="#FF0000">后退</font></a>
      </td>
    </tr>
  </tbody>
</table>

</body>
</html>
<%
		rs2.close
		conn.close
%>