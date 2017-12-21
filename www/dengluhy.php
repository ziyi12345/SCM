<?php
require("bg.php");
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>ÎÞ±êÌâÎÄµµ</title>
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
input{font-family: ÐÂÏ¸Ã÷Ìå, ËÎÌå, Arial; font-size: 14px; height:20px;background-color:#ccccff}
</style>
<body background="sitebg.gif">
<table align="center">
<tr><td align="center"><img src="images/top.jpg" width="950" height="170"> </td></tr>
<tr><td bgcolor="#C4AE74" height="30" width="950" style="FONT-WEIGHT: bold;">
<a href="index.php" style="padding-left:20px">ÉçÍÅÊ×Ò³</a>&nbsp;|&nbsp
<?php
if($_SESSION["user"]=="»á³¤")
{
	?>
<a href="hz_st_edit.php" >ÉçÍÅ×ÊÁÏÐÞ¸Ä</a>&nbsp;|&nbsp;
<a href="hz_hy_shp.php" >´ýÉó»áÔ±ÉóÅú</a>&nbsp;|&nbsp
<a href="hz_look.php" >»áÔ±²é¿´/É¾³ý</a>&nbsp;|&nbsp
<a href="new.php?id=0" >·¢²¼Ìû×Ó</a>&nbsp;|&nbsp

<a href="zhuxiao.php" target="_top">&nbsp;×¢Ïú</a>
<a href="denglu.php" target="_top">&nbsp;µÇÂ½</a>

<?php
}
if($_SESSION["user"]=="ÆÕÍ¨»áÔ±")
{
?>

<a href="hy_modify.php" >ÐÞ¸Ä×ÊÁÏ</a>
<a href="hy_jion.php" >²Î¼ÓÉçÍÅ</a>
<a href="stshq.php" >³ÉÁ¢ÉçÍÅ</a>
<a href="hy_mysq.php" >ÎÒµÄÉçÍÅ</a>
<a href="zhuxiao.php" target="_top">&nbsp;×¢Ïú</a>
<?php
}
if($_SESSION["user"]=="")
echo "<a href=hy_reg.php>ÐÂÓÃ»§×¢²á</a>";
echo "<a>|</a>";
echo "<a href=dengluhy.php>µÇÂ½</a>";
	?>

</td></tr></table>
<table align="center">
<tr>
<?php
if($_SESSION["user"]=="")
{
?>
  <td height="30" width=467 style="FONT-WEIGHT: bold;">
  <FORM  name=FORM2  action=checkuser.php method=post  target=_top>
  <a href="dengluhy.php" >ÆÕÍ¨»áÔ±µÇÂ½</a><a>||</a><a href="dengluhz.php" >»á³¤µÇÂ½</a>
  <table cellspacing=1 cellpadding=4 width=467 height="36" bordercolorlight="#99CCFF" align="center">
    <tbody>
      <tr valign=top >
        <td width="467" height="32">
        ÄØ³Æ£º
        <input name=uid2 id="uid" style="font-size: 14px" size=13 maxlength=16 /></td></tr>
      <tr valign=top >
        <td width="467" height="32">
        ÃÜÂë£º
        <input name=pwd2 type="password" id="pwd" style="font-size: 9pt" size=15 maxlength=16 /></td></tr>
      <tr valign=top >
        <td width="467" height="32">
        <input class=main type=submit size=3 value=ÆÕÍ¨»áÔ±µÇÂ½ name=Submit22 /></td>
      </tr>
    </tbody>
  </table>
</form>
</td>

<?php
	}
else
echo "<td align=\"center\">»¶Ó­»ØÀ´ $_SESSION[username] <a href=zhuxiao.php>ÍË³öÍøÕ¾</a></td>";
	?>
</tr>
</table>
</body>
</html>

