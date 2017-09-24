<?php
extract($_REQUEST);
include("../dbconfig.php");

$sql = "INSERT INTO `multiusers_supervisor`(`supervisor_email`, `supervisor_username`, `supervisor_password`)
        VALUES ('$sueamil','$suuname', '$supass')";
$result = $con->query($sql);
$last_id = $con->insert_id;
if($result == True ){
    echo "<script>window.location.assign('Supervisors_List.php?asuccess=true');</script>";
}
else{
    echo "<script>window.location.assign('Supervisors_List.php?error=true');</script>";
}