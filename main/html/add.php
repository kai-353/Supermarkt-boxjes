<?php
require_once "config.php";

$sql = "UPDATE mensen_in_de_winkel SET aantal = (1+aantal)";
 
$sql ="INSERT INTO timestamps (tijd, type) 

VALUES (". time() . ", 'added')";

header("Content-Type: application/json; charset=UTF-8");
if(mysqli_query($conn, $sql)){
  $myObj->succes = True;
  echo json_encode($myObj);
} else {
  $myObj->succes = False;
  echo json_encode($myObj);
}



?>
