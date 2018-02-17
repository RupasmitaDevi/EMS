<?php
// Start the session
session_start();
?>

<?php
// Create connection
 $conn = mysqli_connect("localhost","root","","mydatabase");
 // Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit'])){
$_SESSION['username'] =$_POST['username'];	
}

$username=$_POST["username"];
$password=$_POST["pass"];
echo " ".$_SESSION["username"];


$sql = "SELECT password,email FROM employeedetails where email='$username'";
$result = mysqli_query($conn, $sql);
if($result->num_rows==0){
	
	/*header('Location:/Grasims_project/userlogin.html');*/
	echo '<script language="javascript">';
	echo 'alert("The username you entered doesnot exist !")';
	echo '</script>';
	
}
else{
    // output data of each row
 while($row = mysqli_fetch_assoc($result)) {
        

if(strcmp($password,$row["password"])!=0)
{
	/*header('Location:/Grasims_project/userlogin.html');*/
	echo '<script language="javascript">';
	echo 'alert("The password you entered is incorrect!")';
	echo '</script>';
}

else if(strcmp($password,$row["password"])==0)
{ 
     header('Location:/Grasims_project/userwelcome.php');
}
else
	echo "0 results";
    }

}
mysqli_close($conn);
 ?> 
 