<!-- <!doctype html> -->
<html lang="pt-br">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Login em PHP</title>
  <link href="css/style.css" rel="stylesheet" />
</head>
<style>
  input{
    margin:5px;
}
</style>
<body>
  <form action="receber.php" method="get">
    <input type="text" required name="userFirstname" placeholder="digite seu primeiro nome"/>
    <input type="text" required name="userLastname" placeholder="digite seu ultimo nome">
    <input type="text" required name="location" placeholder="onde você mora?">
    <input type="number" required name="usernumber" placeholder="digite seu número de telefone"/>
    <input type="number" required name="birthday" placeholder="quantos anos você tem?">
    <input type="email" required name="userEmail" placeholder="exemplo@gmail.com">
    <input type="submit"/>
  </form>
</body>

</html>

