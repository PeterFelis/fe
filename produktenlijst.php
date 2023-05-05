<?php

$title = 'produktenlijst';
include_once('header.php');

include_once('db.php');



// Producten uit de database ophalen
$sql = 'SELECT * FROM producten';
$stmt = $pdo->query($sql);
$producten = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- Producten weergeven op de productlijstpagina -->
<ul class="producten-lijst">
	<?php foreach ($producten as $product): ?>
		<li>
			<h2><?php echo $product['naam']; ?></h2>
			<p><?php echo $product['beschrijving']; ?></p>
			<p>€<?php echo $product['prijs']; ?></p>
			<button>Toevoegen aan winkelwagen</button>
		</li>
	<?php endforeach; ?>
</ul>


<?php include_once('footer.php');