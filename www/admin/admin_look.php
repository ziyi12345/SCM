<?php
session_start();
if($_SESSION[user]!="����Ա")
{
echo"<script>alert('���ȵ�¼');location.href='index.php'</script>";
	exit;
}
require("../conn.php");

?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<title>���ű༭</title>
<base ><LINK href="all.css" rel=StyleSheet type=text/css>
</head>

<body>

<center>
<form name="form1" method="post" action="admin_look_rs.php">
 <select name="id" id="id">
    <option value="" selected>��ѡ���������</option>
<?php
 $sql="SELECT * FROM stinfor WHERE st_state=1 order by st_id DESC";
$res=mysql_query($sql);
while($data=mysql_fetch_array($res))
{
 ?>
    <option value="<?php echo $data["st_id"]?>"><?php echo $data["st_name"]?></option>
    <?php
}
	 ?>
  </select>
  <input name="cmdOK" type="submit" id="cmdOK" value="�鿴" >
</form></center>


</body>
</html>

