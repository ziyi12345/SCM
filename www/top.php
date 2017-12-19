
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>无标题文档</title>
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
input{font-family: 新细明体, 宋体, Arial; font-size: 14px; height:20px;background-color:#ccccff}
</style>
<body background="sitebg.gif">
<table align="center">
<tr><td align="center"><img src="images/top.jpg" width="950" height="170"> </td></tr>
<tr><td bgcolor="#C4AE74" height="30" width="950" style="FONT-WEIGHT: bold;">
<a href="index.php" style="padding-left:20px">社团首页</a>&nbsp;|&nbsp
<?php
if($_SESSION["user"]=="会长")
{
	?>
<a href="hz_st_edit.php" >社团资料修改</a>&nbsp;|&nbsp;
<a href="hz_hy_shp.php" >待审会员审批</a>&nbsp;|&nbsp
<a href="hz_look.php" >会员查看/删除</a>&nbsp;|&nbsp
<a href="new.php?id=0" >发布帖子</a>&nbsp;|&nbsp

<a href="zhuxiao.php" target="_top">&nbsp;注销</a>


<?php
}
if($_SESSION["user"]=="普通会员")
{
?>

<a href="hy_modify.php" >修改资料</a>
<a href="hy_jion.php" >参加社团</a>
<a href="stshq.php" >成立社团</a>
<a href="hy_mysq.php" >我的社团</a>
<a href="zhuxiao.php" target="_top">&nbsp;注销</a>
<?php
}
if($_SESSION["user"]=="")
{echo "<a href=hy_reg.php>新用户注册	</a>";
echo "<a href=denglu.php>登陆</a>";}
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
echo "<td align=\"center\">欢迎回来 $_SESSION[username] <a href=zhuxiao.php>退出网站</a></td>";
	?>
</tr>
</table>
</body>
</html>

