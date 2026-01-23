<!-- <!DOCTYPE html> -->
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title></title>
  <link href="CSS/style.css" rel="stylesheet">
  <!--  <link href="CSS/media.css" rel="stylesheet" media="screen">-->
</head>

<body>
  <form id="Loginform" action="back/API.php" method="get">
    <h1>Bem vindo de volta</h1>
    <input type="text" id="username" name="nome" required />
    <input type="password" id="password" name="password" required />
    <label for="chek" id="remember">Lembre me</label>
    <input type="checkbox" id="chek">
    <p id="forgot"><a href="#">Esqueceu a senha?</a></p>
    <input type="submit" id="send" value="Enviar">
    <p id="conta">ainda não tem conta? <a href="#" id="cada">Cadasatre-se</a> já</p>
  </form>
  <form id="Regiform" action="back/API.php" method="get">
    <h1>Registra-se</h1>
    <section id="pessoais">
      <input type="text" id="FirstName" name="FirstName" required placeholder="Digite seu nome">
      <span id="firstname_error"></span>
      <input type="text" id="LastName" name="LastName" required placeholder="Digite seu ultimo nome">
      <span id="lastname_error"></span>
      <input type="text" id="FatherName" name="FatherName" required placeholder="Digite o nome do seu pai">
      <span id="fathername_error"></span>
      <input type="text" id="MotherName" name="MotherName" required placeholder="Digite o nome do sua mãe">
      <span id="mothername_error"></span>
      <select id="sexo" name="sexo">
        <option value="Masculino">Masculino</option>
        <option value="Feminino">Feminino</option>
      </select>
      <input type="date" id="date" name="data">
      <button type="button" id="next1" class="next">Proximo</button>
    </section>

    <section id="contacto">
      <button type="button" id="back1" class="btn">
        <?php echo file_get_contents("icons/arrow-left.svg"); ?>
      </button>
      <input type="text" id="nature" name="nature" placeholder="De que provincia és?" required>
      <span id="nature_error"></span>
      <input type="number" id="number" required name="number" placeholder="Digite seu número de telefone">
      <span id="number_error"></span>
      <input type="email" id="email" name="email" placeholder="exemplo@gmail.com" required>
      <span id="email_error"></span>
      <input type="text" id="location" name="location" placeholder="Onde voçê mora?" required>
      <span id="location_error"></span>
      <button type="button" id="next2" class="next">Proximo</button>
    </section>
    <section id="resto">
      <button type="button" id="back2" class="btn">
        <?php echo file_get_contents("icons/arrow-left.svg"); ?>
      </button>
      <select name="turno" id="turno">
        <option value="Manhã">Manhã</option>
        <option value="Tarde">Tarde</option>
        <option value="Noite">Noite</option>
      </select>
      <select name="curso" id="curso">
        <option value="Informatica">Informatica</option>
        <option value="Enfermagem">Enfermagem</option>
        <option value="Contabilidade">Contabilidade</option>
        <option value="Direito">Direito</option>
        <option value="Eletrecidade">Eletrecidade</option>
      </select>
      <select id="classe" name="classe">
        <option value="10ª">10ª</option>
        <option value="11ª">11ª</option>
        <option value="12ª">12ª</option>
        <option value="13ª">13ª</option>
      </select>
      <button type="button" id="next3" class="next">Proximo</button>
    </section>
    <section id="senha">
      <button type="button" id="back3" class="btn">
        <?php echo file_get_contents("icons/arrow-left.svg"); ?>
      </button>
      <input type="password" name="senha" id="INP_senha" placeholder="Digite a sua senha">
      <span id="senha_error"></span>
      <input type="password" name="confirm_senha" id="INP_confirm_senha" placeholder="Confirme a sua senha">
      <span id="confirm_senha_error"></span>
      <input type="submit" id="send" value="Enviar">
    </section>
  </form>
  <script src="script/file.js"></script>
  <script src="node_modules/eruda/eruda.js"></script>
  <script>
    eruda.init();
  </script>
</body>
