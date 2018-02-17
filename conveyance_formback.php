<?php
session_start();
?>

<?php
                                                                   $connect=mysqli_connect("localhost","root","","mydatabase");
 
                                                                   if(!$connect)
                                                                   {
		                                                              die("connection failed".mysqli_connect_error());
                                                                   }
                                                                   $sql = "SELECT department FROM employeedetails where email='$_SESSION[username]'";
                                                                   $result = mysqli_query($connect, $sql);
                                                                   while($row=$result->fetch_assoc()){
                                                                   $r=$row["department"];}
                                                                 ?>

<?php
$name=$_POST['name'];
$depart1=$_POST['loc_from'];
$depart3=$_POST['loc_to'];
$concat=$_POST['ReqDate']." ".$_POST['usr_time'];
$phone=$_POST['phone'];
$vehicle=$_POST['vehicle'];
$facility=$_POST['facility'];
$visit=$_POST['visit'];
$textbox=$_POST['textbox'];
$no_per=$_POST['no_per'];
$emp_code=$_POST['emp_code'];

/*$form_id= $_SESSION['formid'];*/

$connect=mysqli_connect("localhost","root","","mydatabase");
 
                                                if(!$connect)
                                                {
		                                            die("connection failed".mysqli_connect_error());
                                                }

	                                            /*$db_selected=mysqli_select_db('mydatabase',$connect);
	                                            if(!$db_selected)
	                                            {
		                                            die('can\'t use mydatabase:'.mysql_error());
	                                            }*/
 
                                                //Execute the query
                                                $concat=$_POST['ReqDate']." ".$_POST['usr_time'];
                                                $sql="INSERT INTO user_status(form_id,name,from_st,to_st,date_time,status,emp_code,department,mobile,vehicle,facility,visit,reason,no_of_persons,date) VALUES ('$_SESSION[formid]','$name','$depart1','$depart3','$concat','pending','$emp_code','$r','$phone','$vehicle','$facility','$visit','$textbox','$no_per',CURDATE())";	
													  if(mysqli_query($connect,$sql)){
	echo "<p><status Added</p>" ;
	echo "<p><a href='userwelcome.php'>Go Back</a></p>";
} else {
	echo "status NOT Added<br />";
}	
echo mysqli_error ($connect);
?>