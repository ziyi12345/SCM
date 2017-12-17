<?php
session_start();
require("../conn.php");
$sql="SELECT * FROM bbs WHERE bbs_id=$id";
$res=mysql_query($sql);
$data=mysql_fetch_array($res);
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>帖子</title>
<base ><LINK href="all.css" rel=StyleSheet type=text/css>
</head>


<body topmargin="2">
<table width="930"  align="center">
  <tr>
    <td><table width="930"  align="center" border="1" bgcolor="#E7FDE3" cellspacing="0"  style='TABLE-LAYOUT: fixed; WORD-BREAK: break-all;border-collapse:collapse; border-left-width:1px; border-right-width:1px; border-top-width:1px'; cellpadding="10">
        <tr  >
          <td width="20%">主题：</td>
          <td width="80%"><?php echo $data["bbs_top"]?></td>
        </tr>
        <tr>
          <td>内容：</td>
          <td><?php echo $data["bbs_content"]?></td>
        </tr>
        <tr bgcolor="#cbe6b9" >
		  <td>date:<?php echo $data["bbs_date"]?></td>
          <td>From:<?php echo $data["bbs_writer"]?></td>
        </tr>
      </table></td>
  </tr>





  <tr>
    <td><table width="730"  align="center" border="1" cellspacing="0" >
        <tr ><td>以下为回帖：</td></tr></table></td>
  </tr>
  <tr>
    <td>
	<?php
	$sql="SELECT * FROM bbs WHERE bbs_toid =$id ORDER BY bbs_date DESC";
	$res=mysql_query($sql);

while($data=mysql_fetch_array($res))
{
?>
<table width="930"  align="center" border="1" cellspacing="0" bgcolor="#E7FDE3"  style='TABLE-LAYOUT: fixed; WORD-BREAK: break-all;border-collapse:collapse; border-left-width:1px; border-right-width:1px; border-top-width:1px'; cellpadding="10">
        <tr>
          <td width="20%">内容：</td>
          <td width="90%"><?php echo $data["bbs_content"]?>
		  </td>
        </tr>
        <tr bgcolor="#cbe6b9" >
		  <td>date:<?php echo $data["bbs_date"]?></td>
          <td align="left">From:<?php echo $data["bbs_writer"]?><br><a href="news_Del.php?id=<?php echo $data["bbs_id"]?>">删除</a></td>
        </tr>
      </table>
      <?php
}
?> </td>
  </tr>

  <tr>
    <td>
	<form name="form1" method="post" action="in_reto.php">
        <table width="930"  align="center" border="1" cellspacing="0"   bgcolor="#cbe6b9" >
          <tr>
            <td width="10%" valign="top">回复：</td>
          <td width="90%">
 <textarea name="txt1" cols="60" rows="10"></textarea>
              <input type="hidden" name="txt2" value="<?php echo $id?>">
			    <input type="hidden" name="txt3" value="<?php echo $_SESSION["loginname"]?>"></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
            <td align="center">
<input name="cmdOk" type="button" id="cmd_Ok" value="提交">
          &nbsp;&nbsp;&nbsp;&nbsp;    <input type="reset" name="Submit2" value="重置">
            </td>
        </tr>
      </table>
	  </form>
	  </td>
  </tr>
</table>
</body>
</html>
<SCRIPT language=VBScript>
    sub cmdOK_OnClick
			if form1.txt1.value="" then
				alert "提示: 请输入内容!"
				form1.txt1.focus
				else
				call form1.submit()
	end if
    end sub
</SCRIPT>

