<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Product verwijderen uit de database
    $stmt = $pdo->prepare('DELETE FROM producten WHERE id = :id');
    $stmt->execute(['id' => $_POST['id']]);

    header('Location: products.php');
    exit();
}

// Formulier weergeven
echo '<form method="post">';
echo '<p>Weet je zeker dat je dit product wilt verwijderen?</p>';
echo '<input type="hidden" name="id" value="' . $_GET['id'] . '">';
echo '<input type="submit" value="Ja">';
echo '<a href="products.php">Nee</a>';
echo '</form>';
