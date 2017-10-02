<?php
/*session_start();
echo 'hello';
$input_loginname = $_POST['user_loginname'];
$input_password = $_POST['user_password'];

$sql = "SELECT * FROM users_data WHERE user_email OR user_name  = '$user_loginname' AND user_password = '$user_loginame'";
$db->query($sql) $row;
//$row = $stmt->fetch(PDO::FETCH_ASSOC);

echo $row['$user_loginame'];*/
session_start();
include '../db/db.config.php';
$r = array();

$query = $db->query('SELECT * FROM users_data');
$r = $query->fetch(PDO::FETCH_ASSOC)


$_SESSION['username'] = $r['user_name'];


echo '$_SESSION['user_name']';
var_dump($_SESSION['user_name'])

/*try {
    $stmt = $db->prepare("SELECT * FROM users_data");
    $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
    var_dump($userRow);

} catch(PDOException $e) {
    echo $e->getMessage();
}


/*$stmt = $this->db->prepare("SELECT * FROM users_data");
$userRow=$stmt->fetch(PDO::FETCH_ASSOC);

if($stmt->rowCount() > 0) {

        
         if(md5($upass), $userRow['user_pass']))
         {
            $_SESSION['user_session'] = $userRow['user_id'];
            return true;
         }
         else
         {
            return false;
         }
      }
   }
   catch(PDOException $e)
   {
       echo $e->getMessage();
   }*/


