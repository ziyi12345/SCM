
<?php
require("conn.php");
?>
<%
id=request("hyid")
sqltxt="select * from hydsh where hy_nch='"&id&"'"
set rs2 = conn.execute(sqltxt)
if rs2.eof then
response.write "<script language=JavaScript>{window.alert('���ϱ����Σ����ѱ�ɾ����');window.history.go(-1)}</script>"
response.end
end if
%>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ޱ����ĵ�</title>
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
      <td align=right height=18 width="21%">��Ա�سƣ�</td>
      <td height=18 width="79%"> <%=rs2("hy_nch"]?> </td>
    </tr>
    <tr bgcolor="#E7FDE3">
      <td align=right height=18 width="21%">��ʵ������</td>
      <td height=18 width="79%"> <%=rs2("hy_name"]?> </td>
    </tr>
    <tr bgcolor="#cbe6b9">
      <td align=right height=18 width="21%">ѧ�ţ�</td>
      <td height=18 width="79%"> <%=rs2("hy_number"]?> <font color=#ff0000>&nbsp;</font></td>
    </tr>
    <tr bgcolor="#E7FDE3">
      <td align=right height=18 width="21%">Ժϵרҵ�༶��</td>
      <td height=18 width="79%"> <%=rs2("hy_zy"]?> </td>
    </tr>
    <tr bgcolor="#cbe6b9">
      <td align=right height=18 width="21%">���᣺</td>
      <td height=18 width="79%"> <%=rs2("hy_address"]?> </td>
    </tr>
    <tr bgcolor="#E7FDE3">
      <td align=right height=18 width="21%">�Ա�</td>
      <td height=18 width="79%"> <%=rs2("hy_sex"]?> </td>
    </tr>
    <tr bgcolor="#cbe6b9">
      <td align=right height=18 width="21%">��ϵ�绰��</td>
      <td height=18 width="79%"> <%=rs2("hy_phone"]?> </td>
    </tr>
    <tr bgcolor="#E7FDE3">
      <td align=right height=18 width="21%">���������գ�</td>
      <td height=18 width="79%"> <%=rs2("hy_birthday"]?> </td>
    </tr>
    <tr bgcolor="#cbe6b9">
      <td align=right height=18 width="21%">�������䣺</td>
      <td height=18 width="79%"> <%=rs2("hy_email"]?> </td>
    </tr>
    <tr bgcolor="#E7FDE3">
      <td width="21%" height=18 align=right valign="top">��ע�� </td>
      <td height=18 width="79%"> <%=rs2("hy_jl"]?> </td>
    </tr>
    <%	rs2.close
sqltxt="select hy_st from hyinfor where hy_nch='"&id&"'"
set rs2 = conn.execute(sqltxt)
if not rs2.eof then
sht=rs2("hy_st")
else
sht="��δ�μ��κ�����~"
end if
%>
    <tr bgcolor="#cbe6b9">
      <td align=right height=18 width="21%">�������ţ�</td>
      <td height=18 width="79%"><%=sht%> </td>
    </tr>
    <tr bgcolor="#CCCCCC">
      <td width="21%" height=18 align=right>&nbsp;</td>
      <td   width="79%" height=18 align="center"> <a href="#" onClick="winclose()"><font color="#FF0000">����</font></a>
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