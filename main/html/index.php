<?php

session_start();
 




require_once "config.php";


?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <title>Koken met Cees</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
     
      rel="stylesheet"
    />
    <link rel="stylesheet" href="test.css" />
		<link rel="icon" href="plaatjes/icoon.ico">
  </head>
  <body>
    <main>

	
      <section class="glass">
		<?php
            include_once 'dashboard.php';
        ?>
        <div class="les">

            <h1> welkom op de website van de supermarkt</h1>
			</div>
			
			<div class="card">



er zijn nu 

<?php

		
		
		
	$sql = "SELECT aantal
        FROM mensen_in_de_winkel

        ";


 

$result = $conn->query($sql);

while($row = $result->fetch_array()){
    echo $row['aantal'];
}




?>

mensen in de winkel 
			</div>

      </section>
    </main>

  </body>
</html>

