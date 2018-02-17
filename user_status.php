<?php
 
// create a variable
$emp_code=$_POST[""];
$name=$_POST["name"];
$dob=$_POST["dob"];
$contact=$_POST["contact_no"];
$status=$_POST["status"];
$email=$_POST["email"];
$department=$_POST["dep_name"];

 
$connect=mysql_connect("localhost","root","","mydatabase");
 
if(!$connect)
{
		die("connection failed".mysqli_connect_error());
}

	$db_selected=mysql_select_db('mydatabase',$connect);
	if(!$db_selected)
	{
		die('can\'t use mydatabase:'.mysql_error());
	}
 
//Execute the query
 
$sql="INSERT INTO user_status(name,from_st,to_st,date_time,status)
				VALUES('$name','$depart1','$depart3','$depart2'.'depart4','pending')";
	

?>