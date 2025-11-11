<?php
// dados pessoais
$Firstname = $_GET["FirstName"];
$Lastname = $_GET["LastName"];
$Fathername = $_GET["FatherName"];
$Mothername = $_GET["MotherName"];
$Sex = $_GET["sexo"];
if ($Sex === "Masculino") {
  $Sex = "pictures/male4.jpg";
} else {
  $Sex = "pictures/female2.jpg";
};
// ("../main/pictures/")
$Birthdate = $_GET["data"];
// localização, email e numero de telefone
$number = $_GET["number"];
$location = $_GET["location"];
$email = $_GET["email"];
// dados academicos
$turno = $_GET["turno"];
$curso = $_GET["curso"];
$classe = $_GET["classe"];
//senha
$senha = $_GET["senha"]; 
$confirm_senha = $_GET["confirm_senha"];
// <?php echo file_get_contents("../icons/user-graduate.svg");
?>
<!-- <!DOCTYPE html> -->
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="css/main.css" rel="stylesheet">
  </head>
<body>
  <main>
    <div id="navbar">
      <h1>Ficha do aluno</h1>
      <p id="user-graduate">
        <?
          echo file_get_contents("../icons/user-graduate.svg");
        ?>
      </p>
      <button type="button" id="file-earmark" class="btn">
        <?php
          echo file_get_contents("../icons/file-earmark-break.svg");
        ?>
        Imprimir Ficha
      </button>
      <button type="button" id="envelope" class="btn">
        <?php
          echo file_get_contents("../icons/envelope.svg");  
        ?>
        Contratar
      </button>
    </div>
    <div id="perfil">
      <img src="<?php echo $Sex?>"  alt="vasco">
    </div>  
    <section id="dados">
      <nav>
        <p>Dados pessoais</p>
      </nav>
    </section>
  </main>
  <script src="script/main.js"></script>
</body>
</html>
