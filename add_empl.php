<html>
<head><title>ADD EMPLOYEE</title></head>
<body>
<form action="add_empl_backend.php" method="post">
                                                       <pre>
                                                       EMPLOYEE CODE  :<input type="text" required name="EmployeeCode"><br>                                               
                                                       NAME           :<input type="text" required name="name"><br>   
                                                       DEPARTMENT     :<?php


$connect=mysql_connect("localhost","root","","mydatabase");
 
if(!$connect)
{
		die("connection failed".mysql_connect_error());
}	
	$db_selected=mysql_select_db('mydatabase',$connect);
	if(!$db_selected)
	{
		die('can\'t use customer:'.mysql_error());
	}

echo mysql_error ($connect);

$query="SELECT dep_name FROM departmentdetails";
$result=mysql_query($query) or die(mysql_error());
?>
<select name="dep_name">
<?php
while($rs=mysql_fetch_row($result))
{?>
	<option value="<?php echo $rs[0]; ?>"> <?php echo $rs[0]; ?> </option>
<?php
}
?>


</select>									   
                                                       DATE OF BIRTH  :<input type="date" required name="dob"><br>  
                                                       CONTACT NO.    :<input type="number" required name="contact_no"><br>
                                                       MARITAL STATUS :<select name="status">
				                                                       <option value="married">married</option>
				                                                       <option value="bachelor">bachelor</option>
				                                                       <option value="divorced">divorced</option>
				                                                       <option value="widow">widow</option>
				                                                       <option value="widower">widower</option>
				                                                       </select><br>
                                                       EMAIL          :<INPUT TYPE="email" name="email"><br>													
                                                       <input type="submit" value="ADD">
</pre>
</form>
</body>