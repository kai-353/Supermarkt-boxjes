<!DOCTYPE html>
<html>
<head><title>GPIO Tog</title></head>
<h1>RaspberryPi GPIO Toggler</h1>
<body>
<form method=”POST” action=””>
<input type=”submit” name=”btnToggle” value=”TOGGLE!”><br><br>
</form>

<?php
# set pin 7 mode to output
exec(“sudo gpio mode 3 out”);

if ( isset( $_POST[“btnToggle”] ) ) {
# GPIO pin 7 toggles state
# If error codes are not 0, you have a problem
# read pin level
exec (“sudo gpio read 3”, $rReturn, $errcode );

if ( $rReturn[0] == “0”) {
$rReturn[0] = “1”;
}
else {
$rReturn[0] = “0”;
}
exec(“sudo gpio write 3 “.$rReturn[0] );
}
# read pin
exec (“sudo gpio read 3”, $rReturn, $errcode );
if ( $rReturn[0] == “0”) { ?>
Pin 7: <input type=”text” name=”Pin7″ value=<?php echo “OFF”;?> />
<?php
}
else { ?>
Pin 7: <input type=”text” name=”Pin7″ value=<?php echo “ON”;?> />
<?php
}
?>

</body></html>
