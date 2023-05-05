<?php
require_once 'db.php';

$stmt = $pdo->query('SELECT * FROM producten');
$products = $stmt->fetchAll(PDO::FETCH_ASSOC);

header('Content-Type: application/json');
echo json_encode($products);