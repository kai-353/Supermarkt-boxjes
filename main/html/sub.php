<?php
require_once "config.php";

$result = $conn->query("SELECT aantal FROM mensen_in_de_winkel");

while ($row = $result->fetch_array()) {
    $aantal = $row['aantal'];
    if ($aantal == 10) {
        switch_leds();
    }
    if ($aantal > 0) {
        $sql = $conn->query("UPDATE mensen_in_de_winkel SET aantal = (aantal-1)");

        $conn->query($sql);
    }
}
# blue on, red off
function switch_leds()
{
    system('gpio -g mode 3 out');
    system('gpio -g mode 22 out');

    system('gpio -g write 3 1');
    system('gpio -g write 22 0');
}

?>

<?php
require_once "config.php";

$sql = "INSERT INTO timestamps (tijd, type) VALUES (" . time() . ", 'substracted')";
$conn->query($sql);
header('Location: bedankt.php');
exit;
?>



