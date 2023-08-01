<?php

function conectarBancoDeDados()
{
    $host = 'localhost';
    $dbname = 'intranet';
    $username = 'root'; // Substitua pelo nome de usuário do seu banco de dados
    $password = 'root'; // Substitua pela senha do seu banco de dados

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Erro ao conectar ao banco de dados: " . $e->getMessage());
    }
}
?>
