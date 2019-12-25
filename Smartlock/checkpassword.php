<?php
//$temp = $_GET['temp'];

$servername = "localhost";
$username = "iot";
$password = "!Qazxsw2";
$dbname = "iot";

// Create connection
$conn = new mysqli($servername, $username,$password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$val = $_GET['Password'];
$coe = md5("coesmartlock '".$val."'");
$sql = "SELECT * FROM passdoor WHERE  passdoor = '" . $coe . "'";
$objQuery = mysqli_query($conn,$sql);
$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
if (!$objResult) {
    echo "no";
} else {
	
	$namedoor = $objResult["namedoor"];
	$IMEI = $objResult["IMEI"];
    echo "OK'".$namedoor."'     '".$IMEI."'";
	

   
   	$objCon = mysqli_connect("localhost","iot","!Qazxsw2","iot");	
	$strSQL = "DELETE FROM passdoor  WHERE  passdoor = '" . $coe . "'";
	$objQuerypass = mysqli_query($objCon,$strSQL);
	

	
	$sqldoor = "SELECT * FROM door WHERE  IMEI = '" . $IMEI . "' and Door = '" . $namedoor . "'";
	$objQuerydoor = mysqli_query($objCon,$sqldoor);
	$door = mysqli_fetch_array($objQuerydoor,MYSQLI_ASSOC);
	
	$doordata = $door["Door"];
    $imei = $door["IMEI"];
    $Phone = $door["NamePhone"];
    $name = $door["name"];
	//echo $doordata;
	//echo $imei;
	//echo $Phone;
	echo " Device ".$Phone;
	//echo "OK'".$namedoor."'     '".$IMEI."''".$Phone."'""'".$name."'"";
	
	



	$SQLinsert="INSERT INTO Usagehistory (username, Device, Door, IMEI, date, id) VALUES ('" . $name . "', '". $Phone ."', '". $doordata ."', '". $imei ."', CURRENT_TIMESTAMP, NULL)";
	$objQuery2 = mysqli_query($objCon,$SQLinsert);
	mysqli_close($objCon);
	

}

$conn->close();
?>