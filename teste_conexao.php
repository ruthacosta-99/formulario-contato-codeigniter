<?php
$mysqli = new mysqli('localhost', 'root', '', 'zapit_contatos');

if ($mysqli->connect_error) {
    die('Erro de conexão: ' . $mysqli->connect_error);
} else {
    echo 'Conexão bem-sucedida!';
}