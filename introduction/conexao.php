<?php

$database = 'saas';
$user = 'root';
$pass = '';
$server = 'localhost';

// Tentando estabelecer a conexão com o banco de dados
try {
    // Criando uma instância da classe PDO para conectar ao banco de dados
    $pdo = new PDO("mysql:dbname=$database;host=$server;charset=utf8", "$user", "$pass");
  } catch (Exception $e) {
    // Capturando exceções em caso de falha na conexão
    echo 'Erro nos dados de conexão com o Banco!' . $e;
  }

?>