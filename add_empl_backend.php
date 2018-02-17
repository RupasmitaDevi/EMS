<?php
 
// create a variable
$emp_code=$_POST["EmployeeCode"];
$name=$_POST["name"];
$dob=$_POST["dob"];
$contact=$_POST["contact_no"];
$status=$_POST["status"];
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
 
$sql="INSERT INTO employeedetails(emp_code,name,dob,contact,status,email,password,department)
				VALUES('$emp_code','$name','$dob','$contact','$status','$email','$emp_code','$department')";
	if(mysqli_query($connect,$sql)){
	echo "<p><Employee Added</p>" ;
	echo "<p><a href='add_empl.php'>Go Back</a></p>";
} else {
	echo "Employee NOT Added<br />";
	

echo mysqli_error ($connect);
}
?>