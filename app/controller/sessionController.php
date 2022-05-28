<?php
require_once('../entities/conexao.php');
$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = <<<sql
   select nome user from usuarios where login = '{$login}' and senha = '{$senha}'
sql;
$getDados = $conn->query($sql);
$autenticacao = $getDados->fetchColumn();
if (!!$autenticacao) {
   $numero_de_bytes = 10;
   $restultado_bytes = random_bytes($numero_de_bytes);
   $resultado_final = bin2hex($restultado_bytes);
   $dateTime = date('Y-m-d H:i:s');
   $query = <<<sql
      update usuarios set authToken = '$resultado_final', data_login = '{$dateTime}'
      where login = '{$login}' and senha = '{$senha}'
   sql;
   $conn->query($query);
   session_start();
   $_SESSION['AUTH_TOKEN'] = $resultado_final;
   $_SESSION['AUTH_USER'] = $autenticacao;
}
echo json_encode($autenticacao);
