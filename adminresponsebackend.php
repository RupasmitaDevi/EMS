<?php
session_start();
?>
<html>
<body>
<?php
	mysql_connect('localhost','root','');
	mysql_select_db("mydatabase");
	$q="SELECT * FROM user_status WHERE status like 'accepted by HOD'";
	$res1=mysql_query($q);
	if($res1){
		while($row1=mysql_fetch_assoc($res1))
		{
			$formid=$row1['form_id'];
			$q2="SELECT * FROM `user_status` WHERE `form_id`=$formid;";
			$res2=mysql_query($q2);
			if($res2){
				$formid=$row1['form_id'];
			
				$row2=mysql_fetch_assoc($res2);
				$eid=$row2['emp_code'];
				/*$tid=$row2['tid'];
				echo "Form "."<a href='http://localhost/TEE/eresponse.php'>".$formid."</a>"." filled by employee $eid for training $tid";
				$_SESSION['formid']=$formid;
				$_SESSION['eid']=$eid;
				//$_SESSION['hid']=$rmid;
				$_SESSION['tid']=$tid;*/
				
echo "Form "."<a href='http://localhost/Grasims_project/adminform.php? id=$formid'>".$formid."</a>"." filled by employee $eid for con"."<br>";
			
			
			}
			}
		}
	
	if(mysql_num_rows($res1)==0){
		echo "There are no forms filled";
	}
?>
</body>
</html>