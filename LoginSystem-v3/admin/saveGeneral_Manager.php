<?php
extract($_REQUEST);
include("../dbconfig.php");

$sql = "INSERT INTO `multiusers_general_manager`(`manager_email`, `manager_username`, `manager_password`) 
        VALUES ('$seamil','$suname', '$spass')";
$result = $con->query($sql);
$last_id = $con->insert_id;
if($result == True ){
	echo "<script>window.location.assign('General_Managers_List.php?asuccess=true');</script>";
}
else{
	echo "<script>window.location.assign('General_Managers_List.php?error=true');</script>";
}
?>