<?php
session_start();
require_once "config.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <title>Counter</title>
    <link rel="stylesheet" href="css/stylesheet.css" />
</head>

<body>
    <main>
        <div>
            </br>
            <?php

            $sql = "SELECT aantal FROM mensen_in_de_winkel";
            $result = $conn->query($sql);

            while ($row = $result->fetch_array()) {
                $nummer = $row['aantal'];
                echo "Bedankt voor het bezoeken van onze winkel. Er zijn nu " . $nummer . " andere mensen in de winkel, vergeet u zometeen niet uit te scannen!";
            }
            ?>
            </br>
        </div>
    </main>
</body>

</html>
