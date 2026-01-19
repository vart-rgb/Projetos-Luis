<?php
// Cabeçalhos CORS básicos 
header("Access-Control-Allow-Origin: http://localhost:8001");  // perigo, nunca fazer!                  
header("Access-Control-Allow-Methods: POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json; charset=utf-8");
$raw = file_get_contents("php://input");
$dados = json_decode($raw, true);

function ValidarEstado($value)
{
  $erro = [];
  if (empty($value)) {
    array_push($erro, "campo vazio");
  };
  if (!isset($value)) {
    array_push($erro, "campo ausente");
  };
  if (empty($erro)) {
    return null;
  } else {
    return $erro;
  };
};
/*
As primeiras variaveis de cada 
função abaixo serve para validar se o campo está vazio ou ausente 
se a função "ValidarEstado" retornar um valor diferente de null
a funcao retorna esse valor para a chamada da função
empacota em um json e envia para o front-end
 */

function ValidarNome($value)
{
  $Validar_estado = ValidarEstado($value);
  if ($Validar_estado !== null) {
    return $Validar_estado;
  } else {
    if ($value < 3) {
      return 'campo precisa de 3 caracteres no minimo';
    } else {
      return null;
    };
  };
};
function ValidarPhoneNumber($phone)
{
  $Validar_estado = ValidarEstado($phone);
  if ($Validar_estado !== null) {
    return $Validar_estado;
  } else {
    if ($phone[0] == 9) {
      $limpo = preg_replace('/[^0-9]/', '', $phone);
      if (strlen($limpo) !== 9) {
        $erros = "campo precisa de 9 digitos apenas";
        return $erros;
      } else {
        return null;
      };
    } else {
      $erros = "o primeiro numero deve ser 9";
      return $erros;
    };
  };
};
function ValidarProvincia($Provincia)
{
  $provinciaValida = ValidarEstado($Provincia);
  if ($provinciaValida !== null) {
    return $provinciaValida;
  } else {
    $Provincias = [
      "Luanda",
      "Huambo",
      "Benguela",
      "Cuando Cubango",
      "Uige",
      "Malanje",
      "Kuanza sul",
      "Kuanza norte",
      "Lunda sul",
      "Cunene",
      "Huíla",
      "Namibe",
      "Lunda norte",
      "Bié",
      "Zaire",
      "Bengo",
      "Moxiko"
    ];
    foreach ($Provincias as $item) {
      if ($item === $Provincia) {
        return null;
      };
    };
    return "A Provincia não existe";
  };
};
function ValidarEmail($value)
{
  $Validar_Email = ValidarEstado($value);
  if ($Validar_Email !== null) {
    return $Validar_Email;
  } else {
    if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
      return "Email inválido";
    };
    return null;
  }
};
function ValidarData($value){
  $dataValida = ValidarEstado($value);
  if ($dataValida !== null){
    return $dataValida;
  } else{
    $newDate
  };
};
function ValidarPassword($password, $confirm)
{
  $passwordValido = ValidarEstado($password);
  $confirmValido = ValidarEstado($confirm);
  if ($passwordValido !== null && $confirmValido !== null) {
    return [$password, $confirmValido];
  } else {
    if ($password < 8) {
      return ["o campo é menor que 8 caracteres", null];
    } else {
      if ($confirm !== $password) {
        return [null, "A senha inserida não condiz com a anterior"];
      } else {
        return [null, null];
      }
    };
  };
};
$fname = ValidarNome($dados['firstname']);
$lname = ValidarNome($dados['lastname']);
$father = ValidarNome($dados['fathername']);
$mother = ValidarNome($dados['mothername']);
$Province = ValidarProvincia($dados['nature']);
$phoneNumber = ValidarPhoneNumber($dados['number']);
$email = ValidarEmail($dados['email']);
$birthday = ValidarEstado($dados['birthday']);
$location = ValidarEstado($dados['location']);
$grade = ValidarEstado($dados['grade']);
$course = ValidarEstado($dados['curso']);
$bout = ValidarEstado($dados['periodo']);
/* esta variavel compara se as senhas condizem e se o tamanho é de pelos 8 caracteres */
$passwords = ValidarPassword($dados['passwd'], $dados['confirm_passwd']);

if ($dados !== null) {
  // Exemplo: Processar e retornar uma resposta
  $resposta = array(
    'status' => 'sucesso',
    'mensagem' => 'Dados recebidos e processados!',
    'state' => true
  );
  echo json_encode($resposta); // Envia a resposta em JSON de volta para o JS
} else {
  // Tratar erro de JSON inválido
  echo json_encode(['status' => 'erro', 'mensagem' => 'JSON inválido', 'state' => false]);
}
