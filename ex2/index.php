<!-- <!DOCTYPE html> -->
<html lang="en">
  
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="" href="css/style.css">
    <title>Login</title>
  </head>

  <body>
    <header>
      <nav>
        <ul>
          <li class="mudanca">Serviços</li>
          <li class="mudanca">API</li>
          <li id="regi"><button type="submit" id="regibtn">Registrar</button></li>
          <li id="login"><button type="submit" id="loginbtn">Login</button></li>
        </ul>
      </nav>
    </header>
    <div id="bola">
      
    </div>
    <form id="loginForm" action="main/main.php" method="get">
      <h2>Bem-vindo(a)!!</h2>
      <p>Você está pronto para crescer seus perfis socias</p>
      <label for="username">Nome do utilizador</label>
      <input type="text" id="username" name="nome" required/>
      <label for="password">senha</label>
      <input type="password" id="password" name="password" required/>
      <label for="chek" id="remember">Lembre de mim</label>
      <input type="checkbox" id="chek">
      <p id="forgot"><a href="#">Esqueceu a senha?</a></p>
      <input type="submit" id="send" value="Enviar">
      <p id="conta">ainda não tem conta? <a href="#" id="cada">Cadasatre-se</a> já</p>
    </form>
    <form id="regiForm" action="main/main.php" method="get">
      <h2>Cria a sua conta</h2>
      <label for="reginome">Nome do utilizador</label>
      <input type="text" name="nome" id="reginome">
      <label for="reginumber">Número de telefone</label>
      <input type="number" name="number" id="reginumber">
      <label for="regiPassword">Senha</label>
      <input type="password" name="password" id="regiPassword">
      <label for="regiConfirm">Confirme a senha</label>
      <input type="password" name="confirmPassword" id="regiConfirm">
      <input type="submit" id="regisend" value ="Enviar"> 
    </form>
    <script src="script/script.js"></script>
  </body>

</html>
