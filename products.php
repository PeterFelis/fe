<?php
$title = 'producten';
include_once('header.php');


require_once 'db.php';

// Producten ophalen uit de database
$stmt = $pdo->query('SELECT * FROM producten');
$producten = $stmt->fetchAll(PDO::FETCH_ASSOC);

// HTML weergeven
echo '<h1>Producten</h1>';

echo '<a href="create-product.php">Nieuw product toevoegen</a>';

echo '<ul>';
foreach ($producten as $product) {
    echo '<li>';
    echo '<h2>' . $product['naam'] . '</h2>';
    echo '<p>' . $product['beschrijving'] . '</p>';
    echo '<p>€' . $product['prijs'] . '</p>';
    echo '<a href="update-product.php?id=' . $product['id'] . '">Bewerken</a>';
    echo '<form action="delete-product.php" method="post">';
    echo '<input type="hidden" name="id" value="' . $product['id'] . '">';
    echo '<input type="submit" value="Verwijderen">';
    echo '</form>';
    echo '</li>';
}
echo '</ul>';


include_once('footer.php');