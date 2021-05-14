<?php
require_once "config.php";

$sql = "UPDATE mensen_in_de_winkel SET aantal = (aantal-1)";

header("Content-Type: application/json; charset=UTF-8");
if(mysqli_query($conn, $sql)){
  $myObj->succes = True;
  echo json_encode($myObj);
} else {
  $myObj->succes = False;
  echo json_encode($myObj);
}

?>
