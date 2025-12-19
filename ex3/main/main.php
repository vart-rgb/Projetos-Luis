<?php
// dados pessoais
$Firstname = $_GET["FirstName"];
$Lastname = $_GET["LastName"];
$Fathername = $_GET["FatherName"];
$Mothername = $_GET["MotherName"];
$Sex = $_GET["sexo"];
$sexo2 = $_GET["sexo"];
if ($Sex === "Masculino") {
  $sexo2 = "../main/pictures/male.jpg";
} else {
  $sexo2 = "../main/pictures/female.jpg";
};

$Birthdate = $_GET["data"];
// localização, email e numero de telefone
$number = $_GET["number"];
$location = $_GET["location"];
$nature = $_GET["nature"];
$email = $_GET["email"];
// dados academicos
$turno = $_GET["turno"];
$curso = $_GET["curso"];
$classe = $_GET["classe"];
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

<body id="body">
  <header>
    <nav>
      <button class="theme" id="moon" type="button"><?php echo file_get_contents("../icons/moon-fill.svg") ?></button>
      <button class="theme" id="sun" type="button"><?php echo file_get_contents("../icons/sun-fill.svg") ?></button>
    </nav>
  </header>
  <hr />
  <main id="main">
    <div id="navbar">
      <h1>Ficha do aluno</h1>
      <p id="user-graduate">
        <?php
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
        echo file_get_contents("../icons/envelope-fill.svg");
        ?>
        Contratar
      </button>
    </div>
    <div id="perfil">
      <img src="<?php echo $sexo2; ?>" alt="vasco">
    </div>
    <section>
      <!-- dados do usuario -->
      <article id="dados" class="implements">
        <div class="bar">
          <p id="first-child">
            Dados pessoais
          </p>
        </div>
        <div class="info">
          <p id="birth" class="first-icons">
            <?php echo file_get_contents("../icons/cake2-fill.svg"); ?>
          </p>
          <p class="info_user">
            <?php echo $Birthdate; ?>
          </p>
        </div>
        <div class="info">
          <p id="genero" class="first-icons">
            <?php echo file_get_contents("../icons/gender-bigender.svg"); ?>
          </p>
          <p class="info_user">
            <?php echo $Sex; ?>
          </p>
        </div>
        <div class="info">
          <p id="icon_nature" class="first-icons">
            <?php echo file_get_contents("../icons/geo-alt-fill.svg"); ?>
          </p>
          <p class="info_user">
            <?php echo $nature; ?>
          </p>
        </div>
      </article>
      <!-- dados da familia do usuario -->
      <article id="family_usr" class="implements">
        <div class="bar">
          <p id="second-child">
            familia
          </p>
        </div>
        <div class="info">
          <p id="Father" class="second-icons">
            <?php echo file_get_contents("../icons/person-standing.svg"); ?>
          </p>
          <p class="family_user">
            <?php echo $Fathername; ?>
          </p>
        </div>
        <div class="info">
          <p id="Mother" class="second-icons">
            <?php echo file_get_contents("../icons/person-standing-dress.svg"); ?>
          </p>
          <p class="family_user">
            <?php echo $Mothername; ?>
          </p>
        </div>
        <div class="info">
          <p id="usr_name" class="second-icons">
            <?php echo file_get_contents("../icons/user-alt.svg"); ?>
          </p>
          <p class="family_user">
            <?php echo $Firstname, " ", $Lastname; ?>
          </p>
        </div>
      </article>

      <!-- dados academicos do usuario -->
      <article id="usr_academcs" class="implements">
        <div class="bar">
          <p id="third-child">
            dados academicos
          </p>
        </div>
        <div class="info">
          <p class="third-icons">
            <?php echo file_get_contents("../icons/stack.svg"); ?>
          </p>
          <p class="academic_user">
            <?php echo $classe; ?>
          </p>
        </div>
        <div class="info">
          <p id="book" class="third-icons">
            <?php echo file_get_contents("../icons/book.svg"); ?>
          </p>
          <p class="academic_user">
            <?php echo $curso; ?>
          </p>
        </div>
        <div class="info">
          <p class="third-icons">
            <?php echo file_get_contents("../icons/clock-fill.svg"); ?>
          </p>
          <p class="academic_user">
            <?php echo $turno; ?>
          </p>
        </div>
      </article>

      <!--mais dados do usuario-->
      <article id="mais_usr" class="implements">
        <div class="bar">
          <p id="forth-child">
            conctato
          </p>
        </div>
        <div class="info">
          <p class="forth-icons">
            <?php echo file_get_contents("../icons/house-door-fill.svg"); ?>
          </p>
          <p class="more_about_user">
            <?php echo $location; ?>
          </p>
        </div>
        <div class="info">
          <p class="forth-icons">
            <?php echo file_get_contents("../icons/telephone-fill.svg"); ?>
          </p>
          <p class="more_about_user">
            <?php echo $number; ?>
          </p>
        </div>
        <div class="info">
          <p class="forth-icons">
            <?php echo file_get_contents("../icons/envelope-fill.svg"); ?>
          </p>
          <p class="more_about_user">
            <?php echo $email; ?>
          </p>
        </div>
      </article>
    </section>
  </main>
  <script src="script/main.js"></script>
</body>

</html>
