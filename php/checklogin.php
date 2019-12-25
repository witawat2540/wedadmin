<?php
	session_start();
	error_reporting(~E_NOTICE);
	if($_SESSION["username"])
	{
	  Header("Location: ..//adminForm.php");
	}
	
	$objCon = mysqli_connect("localhost","iot","!Qazxsw2","iot");	
	$strSQL = "SELECT * FROM admin WHERE username = '".mysqli_real_escape_string($objCon,$_POST['txtUsername'])."' 
	and password = md5('".mysqli_real_escape_string ($objCon,$_POST['txtPassword'])."')";
	$objQuery = mysqli_query($objCon,$strSQL);
	$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	if(!$objResult)
	{	
		header("location:error.php");
		
	}
	else
	{
		$_SESSION["username"] = $objResult["username"];
		$_SESSION["img"] = $objResult["img"];
		$_SESSION["namehome"] = $objResult["namehome"];
		session_write_close();
		if($_SESSION["username"] == $objResult["username"]){
			header("location:../adminForm.php");
		}
	}
	mysqli_close($objCon);
?>