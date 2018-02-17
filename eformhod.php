<?php
// Start the session
session_start();

?>

<!DOCTYPE html>
<html>
<head>
<style>

.error{color:#ff0000;}

h1{
text-align:center;
}

h2{
text-align:center;
}

h3{text-align:left;
}


</style>
</head>
<body style="background-color:white">
 <?php
/*$nameerr=$codeerr=$mobilephoneerr=$vehicleerr=$facerr=$departerr=$specifyerr=$pererr="";
$name=$code=$mobilephone=$vehicle=$fac=$depart1=$depart2=$depart3=$depart4=$specify=$per="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["name"])) {
    $nameerr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["emp_code"])) {
    $codeerr = "employee code is required";
  } else {
    $code = test_input($_POST["emp_code"]);
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["phone"])) {
    $mobilephoneerr = "mobile number required";
  } else {
    $mobilephone = test_input($_POST["phone"]);
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["vehicle"])) {
    $vehicleerr = "vehicle choice is required";
  } else {
    $vehicle = test_input($_POST["vehicle"]);
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["facility"])) {
    $facerr = "facility is required";
  } else {
    $fac = test_input($_POST["facility"]);
  }
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["loc_from"]) || empty($_POST["ReqDate"]) || empty($_POST["loc_to"]) || empty($_POST["usr_time"])) {
    $departerr = "Departure details are required";
  } else {
    $depart1 = test_input($_POST["loc_from"]);
	 $depart2 = test_input($_POST["ReqDate"]);
	 $depart3 = test_input($_POST["loc_to"]);
	  $depart4 = test_input($_POST["usr_time"]);
  }
}
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["textbox"])) {
    $specifyerr = "purpose is required";
  } else {
    $specify = test_input($_POST["textbox"]);
  }
 }
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   if (empty($_POST["no_per"])) {
    $pererr = "N0. of persons is required";
  } else {
    $per = test_input($_POST["no_per"]);
  }
}
}
function test_input($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}*/
$ide=$_GET['id'];
$_SESSION['formid']=$ide;
$connect=mysqli_connect("localhost","root","","mydatabase");
 
                                                                   if(!$connect)
                                                                   {
		                                                              die("connection failed".mysqli_connect_error());
                                                                   }
                                                                   $sql = "SELECT * FROM user_status where form_id='$ide' and status like '%pending%'";
                                                                   $result = mysqli_query($connect, $sql);
                                                                   while($row=$result->fetch_assoc()){
                                                                    $ename=$row["name"];
																	$ecode=$row["emp_code"];
																	$dept=$row["department"];
																	$mobo=$row["mobile"];
																	$veh=$row["vehicle"];
																	$faci=$row["facility"];
																	$from=$row["from_st"];
																	$to=$row["to_st"];
																	$reqdate=$row["date_time"];
																	$visit=$row["visit"];
																	$purpose=$row["reason"];
																	$per=$row["no_of_persons"];
																	} 
?>
<h1>GRASIM INDUSTRIES LIMITED</h1>
<h2>BIRLAGRAM,NAGDA</h2>
<h2>Conveyance Requisition Slip</h2>
Form-ID:<input type="text" name="formid" value="<?php echo $ide;?>" readonly required/><br /><br />
<h3>To:Conveyance Deptt.<br><br>
Please arrange to provide Conveyance in company account use as mentioned below;<br></h3>
<span class="error">* <?php echo 'Required field';?></span>
<form method="post" action="byemomma.php">

<fieldset>
<legend>Required for:</legend>
(Name of the person(primary) for whom conveyance is needed)<br>
 <pre>                                                                
Name:<input type="text" name="name" value="<?php echo $ename;?>" readonly><span class="error">* <?php/* echo $nameerr;*/?></span><br>  
   
Employee Code:<input type="text"  name="emp_code" value="<?php
                                                                   
                                                                   echo $ecode;
                                                                 ?>" readonly><span class="error">* <?php/* echo $codeerr;*/?></span><br>           
Department:<?php
                                                                   
                                                                   echo $dept;
                                                                 ?><br> 

Mobile Phone:<input type="number"  name="phone" value="<?php
                                                                   
                                                                   echo $mobo;
                                                                 ?>" readonly><span class="error">* <?php /*echo $mobilephoneerr;*/?></span><br>
</pre>
</fieldset>
<pre>															
Type of Vehicle:<?php echo $veh;?>         Facility:<?php echo $faci;?>
<fieldset>
<legend>DEPARTURE</legend>
Location:From:<input type="text"  name="loc_from" value="<?php echo $from;?>"readonly>      To:<input type="text"  name="loc_to" value="<?php echo $to;?>"readonly>     <br>  
Required Date and Time:<input type="datetime"  name="ReqDate" value="<?php echo $reqdate;?>" readonly>                            <span class="error">* <?php/* echo $departerr;*/?></span>
</fieldset>

</pre>
<pre>
Purpose of visit:<?php echo $visit;?><br><br>
Please specify the purpose of your visit:<input type="text"  name="textbox" value="<?php echo $purpose;?>" readonly size="50" maxlength="80">(Maximum 80 characters)<span class="error">* <?php /*echo $specifyerr;*/?></span><br><br>
Number of Persons to travel:<?php echo $per;?><br><br></pre>
<pre>
Arrival Flight Name & No.:<input type="text" name="arrflight" readonly>     Departure Flight Name & No.:<input type="text" name="depflight" readonly>
   
</pre>
<pre>
<h3> 
    Authority Sign
(Function Head & Above)         
</h3>
<input type="submit" name="accept" value="accept">    <input type="submit" name="deny" value="deny">
</pre>






</form>
</body>
</html>