<?php
	
	$objCon = mysqli_connect("localhost","iot","!Qazxsw2","iot");
	$strSQL = "INSERT INTO  door(NamePhone,IMEI,Door,NumbPhone,name) VALUES ( '".mysqli_real_escape_string($objCon,$_POST['NamePhone'])."' 
	,'".mysqli_real_escape_string($objCon,$_POST['txtEmei'])."','".$_POST['txtDoor']."','".mysqli_real_escape_string($objCon,$_POST['phone'])."','".mysqli_real_escape_string($objCon,$_POST['Name'])."')";
	$objQuery = mysqli_query($objCon,$strSQL);
	
	

	Header("Location: ../adminForm.php");
	mysqli_close($objCon);
?>