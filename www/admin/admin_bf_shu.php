<?php
session_start();
if($_SESSION[user]!="����Ա")
{
echo"<script>alert('���ȵ�¼');location.href='index.php'</script>";
	exit;
}
?>
 <%
 select case Request("menu")
 case "bakbf"
set MyFileObject=Server.CreateOBject("Scripting.FileSystemObject")
MyFileObject.CopyFile ""&Server.MapPath("mdbconn\stu.mdb")&"",""&Server.MapPath(Request("yl"))&""
set MyFileObject= nothing
response.write "<script language=JavaScript>{window.alert('���ݿ�ɹ����ݣ�');window.location.href='admin_bf_shu.php'}</script>"
response.End()
end select
%>
<html><head><title></title><base ><LINK href="all.css" rel=StyleSheet type=text/css>
</head><body>
<table width="730"  align="center" border="1" cellspacing="0" >
  <tr >
    <td colspan="2">�������ݿ�:</td>
  </tr>
  <tr bgcolor="#E7FDE3">
    <td width="20%">ԭ�����ݿ�·��:</td>
    <td width="80%">mdbconn\stu.mdb</td>
  </tr><form action=?menu=bakbf method="POST">
  <tr bgcolor="#E7FDE3">
    <td>�������ݿ�·��:</td>
    <td><input name="yl" type="text" value="bf\bfstu.mdb" size="20" maxlength="20">
        Ĭ��: bf\bfstu.mdb <font color="#FF0000">ע��:�����ļ��б������</font></td>
  </tr>
  <tr bgcolor="#cbe6b9">
    <td colspan="2" align="center"><input type="submit" name="Submit" value="�������ݿ�" onclick=" window.location='admin_zhl_shuok.php'"  style="font-family: ��ϸ����, ����, Arial; font-size: 9pt; height:20px;background-color:#D4D0C8;" onMouseOver ="this.style.backgroundColor='#FFC864'" onMouseOut ="this.style.backgroundColor='#D4D0C8'"></td>
  </tr></form>
</table>

</body></html>