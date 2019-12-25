<?php
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

$imei = $_GET['imei'];
$name = $_GET['name'];

$sql = "SELECT * FROM door WHERE  IMEI = '" . $imei . "' and Door = '" . $name . "'";
$objQuery = mysqli_query($conn,$sql);
$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);

if (!$objResult) {
    echo "no";
} else {
	
	$namedoor = $objResult["Door"];
    $IMEI = $objResult["IMEI"];
    $NamePhone = $objResult["NamePhone"];
    $name = $objResult["name"];
    echo $namedoor,$IMEI ,$NamePhone,$name;

   


    $objCon = mysqli_connect("localhost","iot","!Qazxsw2","iot");	
   // $strSQL = "INSERT INTO  Usagehistory(username,Device,Door,IMEI) VALUES ('" . $name . "','". $NamePhone ."','". $namedoor ."' ,'". $IMEI ."')";
    $strSQL="INSERT INTO Usagehistory (username, Device, Door, IMEI, date, id) VALUES ('" . $name . "', '". $NamePhone ."', '". $namedoor ."', '". $IMEI ."', CURRENT_TIMESTAMP, NULL)";
	$objQuery2 = mysqli_query($objCon,$strSQL);
	
	mysqli_close($objCon);
   
}
mysqli_close($conn);

?>