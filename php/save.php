<?php
     $objCon = mysqli_connect("localhost","iot","!Qazxsw2","iot");
     $id = $_POST['id'];
     $NamePhone = $_POST['NamePhone'];
     $Name = $_POST['Name'];
     $IMEI = $_POST['txtEmi'];
     $Door = $_POST['txtDoor'];
     $NumbPhone = $_POST['phone'];
     echo "'".$id."' <br> ";
     echo "'".$NamePhone."' <br> ";
     echo "'".$Name."' <br> ";
     echo "'".$IMEI."' <br> ";
     echo "'".$Door."' <br> ";
     echo "'".$NumbPhone."' <br> ";
     

     $sql =	"UPDATE door SET NamePhone = '". $_POST['NamePhone']."',name ='". $_POST['Name']."', IMEI = '". $_POST['txtEmi']."' , 
      Door = '". $_POST['txtDoor']."' ,  NumbPhone = '". $_POST['phone']."' 
      WHERE id ='".$id."' ";		
     $objQuery = mysqli_query($objCon,$sql);
     header("location:../adminForm.php");


?>