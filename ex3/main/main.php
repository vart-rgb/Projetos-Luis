<?php
// dados pessoais
$Firstname = $_GET["FirstName"];
$Lastname = $_GET["LastName"];
$Fathername = $_GET["FatherName"];
$Mothername = $_GET["MotherName"];
$Sex = $_GET["sexo"];
if ($Sex === "Masculino") {
  $Sex = "pictures/male.png";
} else {
  $Sex = "pictures/female.png";
};

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
    <h1>Ficha do aluno</h1>
    <img src="<?php echo $Sex?>" id="perfil" alt="vasco">
    <section>
      
    </section>
  </main>
  <script src="script/main.js"></script>
</body>
</html>
