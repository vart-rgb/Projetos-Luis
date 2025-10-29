<?php
?>
<!-- <!DOCTYPE html> -->
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="CSS/style.css" rel="stylesheet">
  </head>
  <body>
    <form id="Regiform" action="index.php" method="get">
      <h1>Registra-se</h1>
      <section id="pessoais">
        <input type="text" name="FirstName" required placeholder="Digite seu nome">
        <input type="text" name="LastName" required placeholder="Digite seu ultimo nome">
        <input type="text" name="FatherName" required placeholder="Digite o nome do seu pai">
        <input type="text" name="MotherName" required placeholder="Digite o nome do sua mãe">
        <select id="sexo" name="sexo">
          <option value="Masculino">Masculino</option>
          <option value="Feminino">Feminino</option>
        </select>
        <input type="date" id="date">
        <button type="button" id="next1" class="next">Proximo</button>
      </section>

      <section id="contacto"> 
        <button type="button" id="back1" class="btn">
          <?php echo file_get_contents("icons/arrow-left.svg"); ?>
        </button>

        <input type="number" required name="number" placeholder="Digite seu número de telefone">
        <input type="email" name="email" placeholder="exemplo@gmail.com" required>
        <input type="text" name="location" placeholder="Onde voçê mora?" required>
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
          <option value="Contabilidade">Direito</option>
          <option value="Eletrecidade">Eletrecidade</option>
        </select>
        <select id="classe" name="classe">
          <option value="10ª">10ª</option>
          <option value="11ª">11ª</option>
          <option value="12ª">12ª</option>
          <option value="13ª">13ª</option>
        </select>
        <button type="button" id="next2" class="next">Proximo</button>
      </section>
      <section id="senha"> 
        <button type="button" id="back3" class="btn">
          <?php echo file_get_contents("icons/arrow-left.svg"); ?>
        </button>
        <input type="password" name="senha" id="INP_senha" placeholder="Digite a sua senha">
        <input type="password" name="confirm_senha" id="INP_confirm_senha" placeholder="Confirme a sua senha">
        <input type="submit" id="send" value="Enviar">
      </section>
    </form>
    <script src="script/script.js"></script>
  </body>
</html>
