<?php
extract($_REQUEST);
include("../dbconfig.php");
$sql = "INSERT INTO `multiusers_team_leaders`(`teamleaders_email`, `teamleaders_username`, `teamleaders_password`)
        VALUES ('$tleamil','$tluname', '$tlpass')";
$result = $con->query($sql);
$last_id = $con->insert_id;
if($result == True ){
    echo "<script>window.location.assign('Team_Leaders_List.php?asuccess=true');</script>";
}
else{
    echo "<script>window.location.assign('Team_Leaders_List.php?error=true');</script>";
}
?>