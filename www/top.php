<?php
require("bg.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>�ޱ����ĵ�</title>
<base >
</head>
<style>
div {  font-family: "Verdana", "Arial", "Helvetica", "sans-serif"; font-size: 14px; line-height: 14pt; color: #000000}
div.menu {  font-family: "Verdana", "Arial", "Helvetica", "sans-serif"; font-size: 14px; line-height: 14px; color: #000000}
div.green {  font-family: "Verdana", "Arial", "Helvetica", "sans-serif"; font-size: 14px; line-height: 14px; color: green}
td {  font-family: "Verdana", "Arial", "Helvetica", "sans-serif"; font-size: 14px; line-height: 14pt; color: #000000}
p {  font-family: "Verdana", "Arial", "Helvetica", "sans-serif"; font-size: 14px; line-height: 14pt; color: #000000}
a:link {  font-family: "Verdana", "Arial", "Helvetica", "sans-serif"; font-size: 14px; color:#006600; text-decoration: none; line-height: 14pt}
a:visited {  font-family: "Verdana", "Arial", "Helvetica", "sans-serif"; font-size: 14px; color: #660000; text-decoration: none; line-height: 14pt}
a:hover {  font-family: "Verdana", "Arial", "Helvetica", "sans-serif"; font-size: 14px; color: #FF0000; text-decoration: underline; line-height: 14pt}
input{font-family: ��ϸ����, ����, Arial; font-size: 14px; height:20px;background-color:#ccccff}
</style>
<body background="sitebg.gif">
<table align="center">
<tr><td align="center"><img src="images/top.jpg" width="950" height="170"> </td></tr>
<tr><td bgcolor="#C4AE74" height="30" width="950" style="FONT-WEIGHT: bold;">
<a href="index.php" style="padding-left:20px">������ҳ</a>&nbsp;|&nbsp
<?php
if($_SESSION["user"]=="�᳤")
{
	?>
<a href="hz_st_edit.php" >���������޸�</a>&nbsp;|&nbsp;
<a href="hz_hy_shp.php" >�����Ա����</a>&nbsp;|&nbsp
<a href="hz_look.php" >��Ա�鿴/ɾ��</a>&nbsp;|&nbsp
<a href="new.php?id=0" >��������</a>&nbsp;|&nbsp

<a href="zhuxiao.php" target="_top">&nbsp;ע��</a>


<?php
}
if($_SESSION["user"]=="��ͨ��Ա")
{
?>

<a href="hy_modify.php" >�޸�����</a>
<a href="hy_jion.php" >�μ�����</a>
<a href="stshq.php" >��������</a>
<a href="hy_mysq.php" >�ҵ�����</a>
<a href="zhuxiao.php" target="_top">&nbsp;ע��</a>
<?php
}
if($_SESSION["user"]=="")
{echo "<a href=hy_reg.php>���û�ע��	</a>";
echo "<a href=denglu.php>��½</a>";}
	?>
</td></tr></table>
<table align="center">
<tr>
<?php
if($_SESSION["user"]=="")
{
?>
 
<?php
	}
else
echo "<td align=\"center\"> $_SESSION[username] ����ӭ���� 		<a href=zhuxiao.php>	�˳���վ</a></td>";
	?>
</tr>
</table>
</body>
</html>

