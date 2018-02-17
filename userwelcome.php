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
$sql = "SELECT name FROM employeedetails where email='$_SESSION[username]'";
$result = mysqli_query($connect, $sql);
while($row=$result->fetch_assoc()){
echo "Welcome"." ".$row["name"]." !";}
?>
<ul id="tabmenu">
    <li>
        EMPLOYEE
        <ul>
            <li><a href="?11">EMPLOYEE DETAILS</a>
                
            </li>
            
           
        </ul>
    </li>
    <li>
        <a href="?2">REPORTS</a>
        <ul>
            <li><a href="user_reports.php">CLICK HERE</a></li>
               
            <!--</li>
            <li><a href="?22">MONTHLY</a>
                
            </li>
            <li><a href="?23">YEARLY</a></li>-->
        </ul>
    </li>
    <li>
        <a href="?3">TRANSACTIONS</a>
        <ul>
            <li><a href="?31">LEAVE TRAVEL ASSISTANCE</a></li>
            <li><a href="?32">TRAINIG FEEDBACK EVALUATION</a></li>
			<li><a href="?33">MEDICAL BILLS</a></li>
			<li><a href="conveyance_form.php">CONVEYANCE REQUISITION SLIP</a></li>
			<li><a href="?35">DOMESTIC TRAVEL EXPENSES STATEMENT</a></li>
        </ul>
    </li>
    <li><a href="userlogin.html">LOGOUT</a></li>
</ul>

</body>
</html>