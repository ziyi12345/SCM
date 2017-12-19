
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
<a href="denglu.php" target="_top">&nbsp;登陆</a>

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
echo "<a href=hy_reg.php>新用户注册</a>";
	?>

</td></tr></table>
<table align="center">
<tr>
<?php
if($_SESSION["user"]=="")
{
?>
  <td height="30" width=467 style="FONT-WEIGHT: bold;"><FORM  name=FORM2  action=checkuser.php method=post  target=_top>

  <table cellspacing=1 cellpadding=4 width=467 height="36" bordercolorlight="#99CCFF" align="center">
    <tbody>
      <tr valign=top >
        <td width="467" height="32">
        呢称：          <input
                  name=uid2 id="uid" style="font-size: 14px" size=13 maxlength=16 />
        密码
        <input
                  name=pwd2 type="password" id="pwd" style="font-size: 9pt" size=15 maxlength=16 />
        <input class=main type=submit size=3 value=普通会员登陆 name=Submit22 /></td>
      </tr>
    </tbody>
  </table>
</form>
</form></td>
  <td width="467" align="center" style="FONT-WEIGHT: bold;">
<FORM  name=FORM1  action=check.php method=post  target=_top>

            <TABLE cellSpacing=1 cellPadding=4 width=467  height="32" bordercolorlight="#99CCFF" align="center">
          <TBODY>

            <TR vAlign=top >
              <TD height="32" colSpan=2 >
              帐号:
                <input maxlength=16 size=13
                  name=uid style="font-size: 14px" />
                密码
                <input maxlength=16 size=15
                  name=pwd type="password" style="font-size: 9pt" />
                <input class=main type=submit size=3 value=会长登录 name=Submit2 /></TD>
            </TR>
           </TABLE>

</form>
</td>
<?php
	}
else
echo "<td align=\"center\">欢迎回来 $_SESSION[username] <a href=zhuxiao.php>退出网站</a></td>";
	?>
</tr>
</table>
</body>
</html>

