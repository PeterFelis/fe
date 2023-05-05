<?php
// $host = 'localhost';
// $dbname = 'local';
// $user = 'root';
// $password = 'root';

// $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);


$host = 'localhost';
$dbname = 'local';
$username = 'root';
$password = 'root';
$port = 10005;

$dsn = "mysql:host=$host;port=$port;dbname=$dbname;charset=utf8";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
];
$pdo = new PDO($dsn, $username, $password, $options);
