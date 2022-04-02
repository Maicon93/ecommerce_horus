<?php
//require_once('../app/entities/conexao.php');
$login = $_POST['login'];
$senha = $_POST['senha'];

if ($login == 'admin' && $senha == 'admin') {
    echo json_encode('aaaaaa');
} else {
    return json_encode('bbbbbb');
    echo json_encode('cccc');
}