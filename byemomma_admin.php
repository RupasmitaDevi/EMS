<?php
session_start();
?>
<?php
$conn = mysqli_connect("localhost","root","","mydatabase");
 // Check connection
 if (!$conn) {
     die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['accept'])){
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
$approve='accepted by conveyance';
$formid=$_SESSION['formid'];
$sql=mysql_query("UPDATE user_status SET status='$approve' where form_id='$formid'");
if($sql)
{
	echo "approved successfully";
}

else
{
echo "unsuccessful";
}

	
}
if(isset($_POST['deny'])){
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
$deny='denied by conveyance';
$formid=$_SESSION['formid'];
$sql=mysql_query("UPDATE user_status SET status='$deny' where form_id='$formid'");
if($sql)
{
	echo "denied successfully";
}

else
{
echo "unsuccessful";
}
}
?>
