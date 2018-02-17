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
$form_id=rand(2000,9000);
$_SESSION['formid']=$form_id;
?>
<h1>GRASIM INDUSTRIES LIMITED</h1>
<h2>BIRLAGRAM,NAGDA</h2>
<h2>Conveyance Requisition Slip</h2>
Form-ID:<input type="text" name="formid" value="<?php echo $_SESSION['formid'];?>" readonly required/><br /><br />
<h3>To:Conveyance Deptt.<br><br>
Please arrange to provide Conveyance in company account use as mentioned below;<br></h3>
<span class="error">* <?php echo "Required field";?></span>
<form method="post" action="conveyance_formback.php">

<fieldset>
<legend>Required for:</legend>
(Name of the person(primary) for whom conveyance is needed)<br>
  <pre>                                                                
Name:<input type="text" name="name" value="<?php
                                                                   $connect=mysqli_connect("localhost","root","","mydatabase");
 
                                                                   if(!$connect)
                                                                   {
		                                                              die("connection failed".mysqli_connect_error());
                                                                   }
                                                                   $sql = "SELECT name FROM employeedetails where email='$_SESSION[username]'";
                                                                   $result = mysqli_query($connect, $sql);
                                                                   while($row=$result->fetch_assoc()){
                                                                   echo $row["name"];}
                                                                 ?>"><span class="error">* <?php/* echo $nameerr;*/?></span><br>  
   
Employee Code:<input type="text"  name="emp_code" value="<?php
                                                                   $connect=mysqli_connect("localhost","root","","mydatabase");
 
                                                                   if(!$connect)
                                                                   {
		                                                              die("connection failed".mysqli_connect_error());
                                                                   }
                                                                   $sql = "SELECT emp_code FROM employeedetails where email='$_SESSION[username]'";
                                                                   $result = mysqli_query($connect, $sql);
                                                                   while($row=$result->fetch_assoc()){
                                                                   echo $row["emp_code"];}
                                                                 ?>"><span class="error">* <?php/* echo $codeerr;*/?></span><br>           
Department:<?php
                                                                   $connect=mysqli_connect("localhost","root","","mydatabase");
 
                                                                   if(!$connect)
                                                                   {
		                                                              die("connection failed".mysqli_connect_error());
                                                                   }
                                                                   $sql = "SELECT department FROM employeedetails where email='$_SESSION[username]'";
                                                                   $result = mysqli_query($connect, $sql);
                                                                   while($row=$result->fetch_assoc()){
                                                                   echo " ".$row["department"];}
                                                                 ?><br> 

Mobile Phone:<input type="number"  name="phone" value="<?php
                                                                   $connect=mysqli_connect("localhost","root","","mydatabase");
 
                                                                   if(!$connect)
                                                                   {
		                                                              die("connection failed".mysqli_connect_error());
                                                                   }
                                                                   $sql = "SELECT contact FROM employeedetails where email='$_SESSION[username]'";
                                                                   $result = mysqli_query($connect, $sql);
                                                                   while($row=$result->fetch_assoc()){
                                                                   echo $row["contact"];}
                                                                 ?>"><span class="error">* <?php /*echo $mobilephoneerr;*/?></span><br>
</pre>
</fieldset>
<pre>															
Type of Vehicle:<span class="error">* <?php/* echo $vehicleerr;*/?></span>  
				<input type= "radio"  name="vehicle" value="Car">Car                 Facility:   <span class="error">* <?php/* echo $facerr;*/?></span>
				<input type= "radio"  name="vehicle" value="Qualis">Qualis			          <input type= "radio"  name="facility" value="AC">AC
                                <input type= "radio"  name="vehicle" value="Sumo">Sumo                                   <input type= "radio"  name="facility" value="Non_ac">NON AC
                
                                                 
<fieldset>
<legend>DEPARTURE</legend>
Location:From:<input type="text"  name="loc_from">      To:<input type="text"  name="loc_to">     <br>  
Required Date:<input type="date"  name="ReqDate">      Time:<input type="time"  name="usr_time">                      <span class="error">* <?php/* echo $departerr;*/?></span>
</fieldset>
<fieldset>
<legend>RETURN</legend>
Location:From:<input type="text"  name="loc_from2">      To:<input type="text"  name="loc_to2"><br>
Required Date:<input type="date"  name="ReqDate2">      Time:<input type="time" name="usr_time2"><BR>
</fieldset>
</pre>
<pre>
Purpose of visit:<select name="visit"><option value="Official">Official</option>
<option onclick="myText(this.form)" value="Personal">Personal</option></select><br><br>
Please specify the purpose of your visit:<input type="text"  name="textbox" size="50" maxlength="80">(Maximum 80 characters)<span class="error">* <?php /*echo $specifyerr;*/?></span><br><br>
Number of Persons to travel:<input type="number"  name="no_per"  style="width:30px"><span class="error">* <?php/* echo $pererr;*/?></span><br><br></pre>
<pre>
Arrival Flight Name & No.:<input type="text" name="arrflight">     Departure Flight Name & No.:<input type="text" name="depflight">

</pre>
<pre>
<h3> 
    Authority Sign
(Function Head & Above)         
</h3>
</pre>




<button type="submit" value="submit">Submit</button>
<button type="reset" value="Reset">Reset</button>
<button onclick="myFunction()">Print</button>
<script>
function myFunction(){
window.print();
}
window.onload=function(){
alert("NOTE\n"+"1.Please send requisition at least 2 hours in advance,for local and 24 hours in advance for out station duty respectively for timely organizing the vehicle.\n"+"2.It will be appreciated that duties are combined and as far as possible requisition of vehicle for single person is avoided until and unless it is unavoidable.");
}
function myText(form){
alert("Sorry!\n"+"Not allowed for personal purposes currently !");
}
</script>
</form>
</body>
</html>