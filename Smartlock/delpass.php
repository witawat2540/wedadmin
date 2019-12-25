<?php
	$objCon = mysqli_connect("localhost","iot","!Qazxsw2","iot");	
	$strSQL = "DELETE FROM passdoor ";
	$objQuery = mysqli_query($objCon,$strSQL);
	//$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
	mysqli_close($objCon);
?>
