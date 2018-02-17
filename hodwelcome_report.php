<?php
session_start();
?>
<?php

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
$from=$_POST['from_date'];
$to=$_POST['to_date'];

$query=mysql_query("SELECT * FROM user_status WHERE date <='$to' and date>='$from' and department IN (SELECT department from hoddetails where email='$_SESSION[username]')");
//$query2=mysql_query("SELECT COUNT(form_id) FROM user_status where current_time BETWEEN $from and $to ");
//echo 'No. of records fetched for this period = '.$query2;

if(mysql_num_rows($query) >= 1)
{
	
    $output = "";
	echo '<table border="1" style="width:100%">
    <tr>
		<th>Serial no.</th>
		<th>Form ID</th>
        <th>Employee Code</th>
        <th>Name</th>
		<th>Department</th>
		<th>From Station</th>
		<th>To Station</th>
		<th>Departure Date and Time</th>
		<th>Status</th>
		<th>Mobile</th>
		<th>Vehicle</th>
		<th>Facility</th>
		<th>Purpose of visit</th>
		<th>Reason of visit</th>
		<th>No. of persons</th>
		<th>Applying date</th>
    </tr>';

while ($row = mysql_fetch_array($query)) {
	
    echo '
        <tr>
			<td>'.$row['sr_no'].'</td>
			<td>'.$row['form_id'].'</td>
	        <td>'.$row['emp_code'].'</td>
            <td>'.$row['name'].'</td>
			<td>'.$row['department'].'</td>
            <td>'.$row['from_st'].'</td>
			<td>'.$row['to_st'].'</td>
			<td>'.$row['date_time'].'</td>
			<td>'.$row['status'].'</td>
			<td>'.$row['mobile'].'</td>
			<td>'.$row['vehicle'].'</td>
			<td>'.$row['facility'].'</td>
			<td>'.$row['visit'].'</td>
			<td>'.$row['reason'].'</td>
			<td>'.$row['no_of_persons'].'</td>
			<td>'.$row['date'].'</td>
			
        </tr>';

}

echo '
</table>';
echo $output;
echo "<br>"."Total number of applications in the given period you entered = ".mysql_num_rows($query)."<br>";
echo "<a href='hodwelcome.php'>Home</a>";
}
else
    echo "There was no matching record for the name ";
//echo $to;



?>