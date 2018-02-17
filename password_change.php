<?php
session_start();
$connect=mysql_connect("localhost","root","","mydatabase");
 
if(!$connect)
{
		die("connection failed".mysql_connect_error());
}	
	$db_selected=mysql_select_db('mydatabase',$connect);
	if(!$db_selected)
	{
		die('can\'t use mydatabase:'.mysql_error());
	}

echo mysql_error ($connect);

$username=$_POST['username'];
$password=$_POST['password'];
$newpassword=$_POST['newpassword'];
$confirmnewpassword=$_POST['confirmnewpassword'];
$result=mysql_query("SELECT password FROM employeedetails WHERE email='$username'");
if(!$result)
{
	echo "the username you entered doesnot exist";
}
else if($password != mysql_result($result,0))
{
	echo "you entered an incorrect password";
} 
else if($newpassword==$confirmnewpassword)
{	
$sql=mysql_query("UPDATE employeedetails SET password='$newpassword' where email='$username'");

  if($sql)
{
	echo "password changed successfully";
}
}
else
{
echo "password doesnot match";
}

?>