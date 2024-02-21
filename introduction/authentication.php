<?php
// Inclui o arquivo de conexão com o banco de dados
require_once("conexao.php");

// Obtém os dados do formulário via método POST
$user = $_POST['user'];
$password = $_POST['pass'];

if (!empty($user) && !empty($pass)) {
    $insertData = "INSERT INTO users (name, pass) VELUES ('$user', '$pass')";
} else {
    echo "Campos vazios";
}

// Criptografa a senha usando MD5 (Note: MD5 não é considerado seguro atualmente)
$passcrypt = md5($pass);

// Executa a consulta SQL para buscar o usuário com o email e senha fornecidos
$query = $pdo->query("SELECT * FROM usuarios WHERE email = '$user' and senha = '$pass'");

// Recupera todas as linhas do resultado da consulta como um array associativo
$res = $query->fetchAll(PDO::FETCH_ASSOC);

// Obtém o número total de registros retornados pela consulta
$total_reg = count($res);

// Exibe o número total de registros encontrados
echo $total_reg;
?>