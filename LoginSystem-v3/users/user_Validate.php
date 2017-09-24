<?php
session_start();
include("dbconfig.php");
$table ="";
$rurl="";
extract($_REQUEST);
if($role =="manager")
{
   $table="multiusers_general_manager";
   $rurl="generalmanager/trainer.php";
}
elseif($role =="supervisor")
{
    $table="multiusers_supervisor";
    $rurl="supervisor/suexecute.php";
}
elseif($role =="team_leaders")
{
    $table="multiusers_team_leaders";
    $rurl="teamleaders/tmanager.php";
}
elseif($role =="team_members")
{
    $table="multiusers_team_members";
    $rurl="teamembers/teammembers.php"; 
}
 
  $mail  = $role."_email";
  $uname = $role."_username";
  $pass  = $role."_password";

 echo $check1="SELECT * FROM $table WHERE $mail ='$uemail' AND $pass ='$upwd' ";
 $login1 = $con->query($check1);
 $login_result1 = $login1->num_rows;
 $row1 = mysqli_fetch_array($login1);

 if(is_array($row1)) {
      $_SESSION['s_usersid']    = $row1[0];
     $_SESSION['s_userrole']  =  $role;
     $_SESSION['s_usersemail'] = $row1[$mail];
     $_SESSION['s_usersname']  = $row1[$uname];
   }
   else
   {
    // echo "<script>window.location.assign('index.php?login=error')</script>"; 
    echo $con->error;

   }
 if(isset($_SESSION["s_usersemail"])) {

echo "<script>window.location.assign('".$rurl."')</script>";

}

         
?>