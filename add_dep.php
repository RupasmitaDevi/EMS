<?php
 
// create a variable
$dep_name=$_POST["DepartmentName"];
$dep_code=$_POST["DepartmentCode"];

$connect=mysqli_connect("localhost","root","","mydatabase");
 
if(!$connect)
{
		die("connection failed".mysqli_connect_error());
}
 
//Execute the query
 
$sql="INSERT INTO departmentdetails(dep_name,dep_code)
				VALUES('$dep_name','$dep_code')";
	if(mysqli_query($connect,$sql)){
	echo "<p>department Added</p>";
	




echo "<p><a href='add_dep.html'>Go Back</a></p>";
} else {
	echo "Department NOT Added<br />";
	

echo mysqli_error ($connect);
}
?>