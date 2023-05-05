<?php
require_once 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Formuliergegevens verwerken
    $stmt = $pdo->prepare('INSERT INTO producten (naam, beschrijving, prijs) VALUES (:naam, :beschrijving, :prijs)');
    $stmt->execute([
        'naam' => $_POST['naam'],
        'beschrijving' => $_POST['beschrijving'],
        'prijs' => $_POST['prijs'],
    ]);

    header('Location: products.php');
    exit();
}

// HTML weergeven
echo '<h1>Nieuw product toevoegen</h1>';

echo '<form method="post">';
echo '<label for="naam">Naam:</label>';
echo '<input type="text" id="naam" name="naam">';
echo '<label for="beschrijving">Beschrijving:</label>';
echo '<textarea id="beschrijving" name="beschrijving"></textarea>';
echo '<label for="prijs">Prijs:</label>';
echo '<input type="text" id="prijs" name="prijs">';
echo '<input type="submit" value="Toevoegen">';
echo '</form>';
