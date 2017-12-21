<?php
session_start();
require("conn.php");
$hy_nch=$_SESSION["loginname"];
$st_name=$_SESSION["stname"];

$sqltxt="select * From hydsh  where hy_nch='$hy_nch'";
$res=mysql_query($sqltxt);
$rsUser=mysql_fetch_array($res);
//print_R($rsUser);
$zj=$rsUser["hy_st"];
$hy_st=$rsUser[hy_st].",".$st_name;
$sql="update hydsh set hy_st='$hy_st',hy_zhw='已审' where hy_nch='$hyid'";

$res=mysql_query($sql);
$sqltxt="select * From hydsh  where hy_nch='$hyid'";
$res=mysql_query($sqltxt);
$rsUser=mysql_fetch_array($res);
$hyname=$rsUser["hy_name"];
$hydate=date("Y-m-d");
$hynch=$rsUser["hy_nch"];
$hypwd=$rsUser["hy_pwd"];
		$hysex=$rsUser["hy_sex"];
		$hynumber=$rsUser["hy_number"];
		$hyzy=$rsUser["hy_zy"];
		$hyaddress=$rsUser["hy_address"];
		$hyphone=$rsUser["hy_phone"];
		$hyemail=$rsUser["hy_email"];
		$hybirthday=$rsUser["hy_birthday"];
				$hyjl=$rsUser["hy_jl"];
$sql="insert into hyinfor (hy_date,hy_st,hy_name,hy_nch,hy_pwd,hy_sex,hy_number,hy_zy,hy_address,hy_phone,hy_email,hy_jl) values ('$hydate','$st_name','$hyname','$hynch','$hypwd','$hysex','$hynumber','$hyzy','$hyaddress','$hyphone','$hyemail','$hyjl')";

$res=mysql_query($sql);

?><script language=JavaScript>{window.alert('会员帐号已成功开通！');window.location.href='hz_hy_shp.php'}</script>


