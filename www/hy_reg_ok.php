<?php
require("conn.php");
$sql="select * from hydsh where hy_nch='$hy_nch'";
$res=mysql_query($sql);
$data=mysql_fetch_array($res);
if(!empty($data))
{
	echo "<script language=JavaScript>{window.alert('���س��ѱ�ע��!');window.history.go(-1)}</script>";
	exit;
}
$sql="INSERT INTO hydsh (hy_name ,hy_sex ,hy_phone ,hy_address ,hy_zy ,
hy_date ,hy_birthday ,hy_jl ,hy_number ,hy_nch ,hy_pwd ,hy_email ) VALUES ('$hy_name','$hy_sex','$hy_phone','$hy_address','$hy_zy','$hy_date','$hy_birthday','$hy_jl','$hy_number','$hy_nch','$hy_Pass','$hy_Email')";
$res=mysql_query($sql);

?>
<script language=JavaScript>{window.alert('ע��ɹ�!������ҳ��½��');window.location.href='index.php'}</script>



