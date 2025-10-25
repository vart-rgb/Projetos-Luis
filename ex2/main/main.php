<?php
$name = $_GET["nome"]
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li>Ajuda</li>
          <li>Serviços</li>
          <li>API</li>
        </ul>
      </nav>
    </header>
    <h1> Olá <?php echo $name;?></h1>
  </body>
</html>
