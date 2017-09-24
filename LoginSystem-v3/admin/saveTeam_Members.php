<?php
extract($_REQUEST);
include("../dbconfig.php");
$sql = "INSERT INTO `multiusers_team_members`(`team_members_email`, `team_members_username`, `team_members_password`)
        VALUES ('$tmeamil','$tmuname', '$tmpass')";
$result = $con->query($sql);
$last_id = $con->insert_id;
if($result == True ){
    echo "<script>window.location.assign('Team_Leaders_List.php?asuccess=true');</script>";
}
else{
    echo "<script>window.location.assign('Team_Leaders_List.php?error=true');</script>";
}
?>