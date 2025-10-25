<?php

$Fistname = $_GET["userFirstname"];
$Lastname = $_GET["userLastname"];
$number_user = $_GET["usernumber"];
$age_user = $_GET["birthday"];
$Location_user = $_GET["location"];
$Email_user = $_GET["userEmail"];
$year = date("y");

?>

<html>
  <body>
    <p>O seu nome é <?php echo $Fistname,$Lastname; ?> </p>
    <p><?php echo $Fistname; ?> nasceu no ano de <?php echo 2025 - $age_user;?></p>
    <p>O seu número é de telefone é: <?php echo $number_user; ?> </p>
    <p><?php echo $Fistname; ?> vive <?php echo $Location_user?></p>
    <p>O email de <?php $Fistname;?> é: <?php echo $Email_user?></p>
  </body>
  </html>

