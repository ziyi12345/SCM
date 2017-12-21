<?php
session_start();
require("conn.php");
require("top.php");
$sql="SELECT * FROM bbs WHERE bbs_id =$id";
$res=mysql_query($sql);
$data=mysql_fetch_array($res);
?>

<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>无标题文档</title>
<base ><LINK href="all.css" rel=StyleSheet type=text/css>
</head>

<body>

    <td><table width="950"  align="center" border="1" cellspacing="0"  style='TABLE-LAYOUT: fixed;word-wrap:break-word;border-collapse:collapse; border-left-width:1px; border-right-width:1px; border-top-width:1px'>
    <tr bgcolor="#cbe6b9" >
          <td width="10%">主题：</td>
          <td width="90%"><?php echo $data["bbs_top"]?></td>
        </tr>
        <tr bgcolor="#E7FDE3">
          <td>内容：</td>
          <td><pre><?php echo $data["bbs_content"]?></pre></td>
        </tr>
        <tr bgcolor="#cbe6b9" >

          <td width="10%">发布人:</td>
	  <td><pre>系统管理员</pre></td>	
        </tr>
      </table>

