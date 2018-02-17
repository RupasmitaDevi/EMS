<?php
 
// create a variable
$emp_code=$_POST["hodcode"];
$name=$_POST["name"];

$contact=$_POST["contact_no"];

$email=$_POST["email"];
$department=$_POST["dep_name"];
$connect=mysqli_connect("localhost","root","","mydatabase");
 
if(!$connect)
{
		die("connection failed".mysqli_connect_error());
}

/*	$db_selected=mysql_select_db('mydatabase',$connect);
	if(!$db_selected)
	{
		die('can\'t use mydatabase:'.mysql_error());
	}*/
 
//Execute the query
 
$sql="INSERT INTO hoddetails(emp_code,name,contact,email,password,department)
				VALUES('$emp_code','$name','$contact','$email','$emp_code','$department')";
	if(mysqli_query($connect,$sql)){
	echo "<p><hod Added</p>" ;
	echo "<p><a href='add_hod.php'>Go Back</a></p>";
} else {
	echo "hod NOT Added<br />";
	

echo mysqli_error ($connect);
}
?>