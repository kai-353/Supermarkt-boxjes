<?php
require_once "config.php";

$result = $conn->query("SELECT aantal FROM mensen_in_de_winkel");

while ($row = $result->fetch_array()) {
  $aantal = $row['aantal'];
  if ($aantal > 9) {
    header('Location: wachten.php');
  } elseif ($aantal == 9) {
    switch_leds();
    redirect_bedankt($conn);
  } else {
    redirect_bedankt($conn);
  }
}

function redirect_bedankt($conn)
{
  $update_total = "UPDATE mensen_in_de_winkel SET aantal = (1+aantal), totaal_mensen =(1+totaal_mensen)";
  $timestamp = "INSERT INTO timestamps (tijd, type) VALUES (" . time() . ", 'added')";
  $conn->query($update_total);
  $conn->query($timestamp);
  header('Location: index.php');

}

# blue off, red on
function switch_leds()
{
  system('gpio -g mode 3 out');
  system('gpio -g mode 22 out');

  system('gpio -g write 3 0');
  system('gpio -g write 22 1');
}






  exit;