<?php
	$host='localhost';
	$uname='root';
	$pwd='';
	$db="erestaurant";
$flag['code']=0;
	$con = mysql_connect($host,$uname,'') or die("connection failed");
	mysql_select_db($db,$con) or die("db selection failed");
	 
	
	$name=$_REQUEST['tableno'];
    $email=$_REQUEST['date1'];
	$mobile=$_REQUEST['time'];
	
	


	if($r=mysql_query("INSERT INTO  tblbooking(tableno,date1,time) VALUES('$tableno','$date1','$time') ",$con))
	{
		$flag['code']=1;
		
	}
//echo json_encode(array("result"=>$flag));
	echo(json_encode($flag));
	mysql_close($con);
?>