
<?php
header("Content-Type: application/json; charset=UTF-8");
$obj = json_decode($_GET["x"], false);

$conn = new mysqli("localhost", "root", "raspberry", "database");
$stmt = $conn->prepare("SELECT aantal FROM mensen_in_de_winkel");
$stmt->bind_param("s", $obj->limit);
$stmt->execute();
$result = $stmt->get_result();
$outp = $result->fetch_all(MYSQLI_ASSOC);

echo json_encode([$outp]);
?>
