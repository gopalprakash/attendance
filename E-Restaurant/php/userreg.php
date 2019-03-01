<?php
	$host='localhost';
	$uname='root';
	$pwd='';
	$db="erestaurant";
$flag['code']=0;
	$con = mysql_connect($host,$uname,'') or die("connection failed");
	mysql_select_db($db,$con) or die("db selection failed");
	 
	
	$name=$_REQUEST['name'];
    $email=$_REQUEST['email'];
	$mobile=$_REQUEST['mobile'];
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	$cpassword=$_REQUEST['cpassword'];
	


	if($r=mysql_query("INSERT INTO  tblregistration(name,mobile,email,username,password) VALUES('$name','$mobile','$email','$username','$password') ",$con))
	{
		$flag['code']=1;
		
	}
//echo json_encode(array("result"=>$flag));
	echo(json_encode($flag));
	mysql_close($con);
?>