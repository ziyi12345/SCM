<?php
session_start();
require("conn.php");
$hynch=$_SESSION["loginname"];
$sql="select * from hyinfor where hy_nch='$hynch'";
//echo $sql;
$res=mysql_query($sql);
$rs=mysql_fetch_array($res);
if(!empty($rs))
{
echo "<script language=JavaScript>{window.alert('�㱾�����Ǵ�Э��ĳ�Ա!');window.history.go(-1)}</script>";
exit;
}

$sql="select * from hydsh where hy_nch='$hynch'";
$res=mysql_query($sql);
$rs=mysql_fetch_array($res);
if(substr_count($rs[hy_st],$txtst))
{
echo "<script language=JavaScript>{window.alert('���Ѿ��ύ���μӴ�Э���������!');window.history.go(-1)}</script>";
exit;
}
$hy_st=$rs[hy_st].",".$txtst;
$sql="update hydsh set hy_st='$hy_st' where hy_nch='$hynch'";
$res=mysql_query($sql);
?><script language=JavaScript>{window.alert('�������ύ�������ĵȴ�֪ͨ!');window.history.go(-1)}</script>
