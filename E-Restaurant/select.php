<?php
	$host='localhost';
	$uname='root';
	$pwd='';
	$db="erestaurant";
    $name=$_REQUEST['username'];
    $pass=$_REQUEST['password'];
	$con = mysqli_connect($host,$uname,'',$db) or die("connection failed");
	//echo $name,$pass;
	//$query="select id from tblregistration where username='jaison' and password='jai'";
	$query="select count(id) 'cnt' from tblregistration where username='".$name."' and password='".$pass."'";
	//echo $query;
	//mysqli_select_db($db,$con) or die("db selection failed");
	$result=mysqli_query($con,$query);
    //echo $result->num_rows;
	$jsonData = array();
    $row=$result->fetch_assoc();
	//$cnt= (int)$row['cnt']
echo $row['cnt'];//json_encode(array("result"=>$jsonData));

	//print(json_encode($flag));
	mysqli_close($con);
?>