<?php       
    error_reporting(~E_NOTICE);
    $id = $_POST['btnDelete'];
    //echo $id;
    $objCon = mysqli_connect("localhost","iot","!Qazxsw2","iot");       
    $strSQL ="DELETE FROM door WHERE id = '".$id."' ";
    $objQuery = mysqli_query($objCon,$strSQL);
    Header("Location: ../adminForm.php");
    mysqli_close($objCon);

?>