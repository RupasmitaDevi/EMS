<?php
// Start the session
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Menucool Tab Menu</title>
    <link href="tabmenu/tabmenu.css" rel="stylesheet" type="text/css" />
    <script src="tabmenu/tabmenu.js" type="text/javascript"></script>
</head>
<body style="padding:60px 20px;">
<?php
$connect=mysqli_connect("localhost","root","","mydatabase");
 
if(!$connect)
{
		die("connection failed".mysqli_connect_error());
}
$sql = "SELECT name FROM hoddetails where email='$_SESSION[username]'";
$result = mysqli_query($connect, $sql);
while($row=$result->fetch_assoc()){
echo "Welcome"." ".$row["name"]." !";

}
?>

<ul id="tabmenu">
    
    <li>
        <a href="?20">REPORTS</a>
        <ul>
            <li><a href="hod_reports.php">CLICK HERE</a>
               
            </li>
            <!--<li><a href="?22">MONTHLY</a>
                
            </li>
            <li><a href="?23">YEARLY</a></li>-->
        </ul>
    </li>
    
	<li>
        <a href="?4">REQUESTS</a>
        <ul>
            <li><a href="?41">LEAVE TRAVEL ASSISTANCE</a>
               
            </li>
            <li><a href="?42">TRAINIG FEEDBACK EVALUATION</a>
                
            </li>
            <li><a href="?43">MEDICAL BILLS</a></li>
			<li><a href="hodresponsebackend.php">CONVEYANCE REQUISITION SLIP</a></li>
			<li><a href="?45">DOMESTIIC TRAVEL EXPENSES STATMENT</a></li>
        </ul>
    </li>
    <li><a href="hod_login.html">LOGOUT</a></li>
</ul>

</body>
</html>