<?php
session_start();
if($_SESSION["user"]=="" || $_SESSION["user"]=="��ͨ��Ա")
{
echo "<script language=JavaScript>{window.alert('����Ա���߻᳤���ܷ�����');window.location.href='index.php'}</script>";
exit;
}
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>��������</title>
<base ><LINK href="all.css" rel=StyleSheet type=text/css>
</head>
<script charset="utf-8" src="./wamp/www/editor/kindeditor-min.js"></script>
<script charset="utf-8" src="./editor/lang/zh_CN.js"></script>
<script>
			var editor;
			KindEditor.ready(function(K) {
				editor = K.create('textarea[name="content"]', {
					allowFileManager : true
				});

			});
		</script>
<?php
require("top.php");
?>

<body>
<table align="center"><form name="form1" method="post" action="newsave.php">
<tr> <td> ���⣺</td> <td><input name="txt1" type="text" size="30" maxlength="30">
  <input type="hidden" name="txt4" value="<?php echo $_SESSION["loginname"]?>">
  <input type="hidden" name="txt5" value="<?php echo $_SESSION["stname"]?>">
</td> </tr>
<tr>
      <td valign="top">���ݣ� </td>
      <td>
<textarea id="content_1" name="content" cols="100" rows="8" style="width:550px;height:300px;"></textarea></td>
	

</td></tr>
<tr><td></td>
      <td align="center">
        <input name="cmdOK" type="submit" id="cmdOK" value="�ύ">
  &nbsp;&nbsp;
  <input type="reset" name="Submit2" value="����">
      </td>
    </tr></form></table>
</body>
</html>

