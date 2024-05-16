<?php
require_once '../vendor/autoload.php';

$host = 'localhost';
$dbname = 'recruitment-2306';
$user = 'root';
$password = '';

$pdoOptions = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false,
];

$pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password, $pdoOptions);
$query = new \Envms\FluentPDO\Query($pdo);

return $query;