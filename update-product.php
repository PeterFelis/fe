<?php
require_once 'db.php';

// Productgegevens ophalen uit de database
$stmt = $pdo->prepare('SELECT * FROM producten WHERE id = :id');
$stmt->execute(['id' => $_GET['id']]);
$product = $stmt->fetch(PDO::FETCH_ASSOC);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Formuliergegevens verwerken
    $stmt = $pdo->prepare('UPDATE producten SET naam = :naam, beschrijving = :beschrijving, prijs = :prijs WHERE id = :id');
    $stmt->execute([
        'id' => $_POST['id'],
        'naam' => $_POST['naam'],
        'beschrijving' => $_POST['beschrijving'],
        'prijs' => $_POST['prijs'],
    ]);

    header('Location: products.php');
    exit();
}

// HTML weergeven
echo '<h1>Product bewerken</h1>';

echo '<form method="post">';
echo '<input type="hidden" name="id" value="' . $product['id'] . '">';
echo '<label for="naam">Naam:</label>';
echo '<input type="text" id="naam" name="naam" value="' . $product['naam'] . '">';
echo '<label for="beschrijving">Beschrijving:</label>';
echo '<textarea id="beschrijving" name="beschrijving">' . $product['beschrijving'] . '</textarea>';
echo '<label for="prijs">Prijs:</label>';
echo '<input type="text" id="prijs" name="prijs" value="' . $product['prijs'] . '">';
echo '<input type="submit" value="Opslaan">';
echo '</form>';

