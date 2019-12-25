<?php 
header("content-type:text/javascript;charset=utf-8");
define('HOST','localhost'); //ชื่อ host
define('USER','iot'); //username
define('PASS','!Qazxsw2'); //password
define('DB','iot'); // ชื่อ database ที่จะติดต่อ

$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect'); //ต่อฐานข้อมูล

//$con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect'); //ต่อฐานข้อมูล

mysqli_set_charset($con,"utf8");
$IMEI = $_GET['IMEI'];


$sql = "SELECT * FROM door WHERE IMEI = '" . $IMEI . "'";

$r = mysqli_query($con,$sql);		
//$objResult = mysqli_fetch_array($objQuery,MYSQLI_ASSOC);
$result = array();
while($row = mysqli_fetch_assoc($r))
{
	array_push($result,array("Door"=>$row['Door']));

}

echo json_encode(array('result'=>$result));




mysqli_close($con);


?>

 