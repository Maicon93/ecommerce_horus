<?php
require_once('app/entities/conexao.php');
//$rota = new Routes;
//$autenticacao = $rota->routes('verifLogin');
session_start();
$sql = <<<sql
        select count(id) from usuarios where authToken = '{$_SESSION['AUTH_TOKEN']}';
    sql;
$getDados = $conn->query($sql);
$autenticacao = $getDados->fetchColumn();
!$autenticacao && header('Location: /ecommerce_horus/index.html');
