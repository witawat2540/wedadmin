<?php
	
	$objCon = mysqli_connect("localhost","iot","!Qazxsw2","iot");
	$strSQL = "INSERT INTO  door(NamePhone,IMEI,Door,NumbPhone) VALUES ( '".mysqli_real_escape_string($objCon,$_POST['NamePhone'])."' 
	,'".mysqli_real_escape_string($objCon,$_POST['txtEmei'])."','".mysqli_real_escape_string($objCon,$_POST['txtDoor'])."','".mysqli_real_escape_string($objCon,$_POST['phone'])."')";
	$objQuery = mysqli_query($objCon,$strSQL);
	
	

	Header("Location: adminForm.php");
	mysqli_close($objCon);
?>