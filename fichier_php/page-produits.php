<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
    <title>Produits</title>
</head>
<body>
    <header>
    <?php
        include("header.php");
        ?>
    </header>
    <main>
    <?php
include("bdd.php");
$choice = $_GET['id_velos'];
$bdd = new PDO("mysql:host=$host;dbname=$database", $user, $mdp);
$produits = $bdd->query("SELECT * FROM velos WHERE id_velos = $choice")->fetch(PDO::FETCH_ASSOC);

// Vos lignes de code PHP pour récupérer les données ici...

echo "<div class='produit-container'>";
echo "<img src='" . $produits['photo_url'] . "' alt='photo du produit' id='photo-produits'>";
echo "<div id='descriptif'>";
echo "<span id='titre-produits'><p>" . $produits['nom'] . "</p></span>";
echo "<h2 id='prix-produits'>" . $produits['prix'] . "€</h2>";
echo "<p id='description-produits'>" . $produits['description'] . "</p>";
echo "<a href='commander.php'><button id='bouton-commander'>Commander</button></a>";
echo "</div>";
echo "</div>";
echo "<h2 id='titre-avis'> Les avis que nos clients nous on laissé</h2>";
echo "<p id='avis-produits'>" . $produits['avis'] . "</p>";
echo "<h2 id='note-moye'>Note Moyenne</h2>";
echo "<div class='etoiles'>";
for ($i = 0; $i < $produits['note']; $i++) {
    echo "<span class='star'>&#9733;</span>"  ;
}
echo "</div>";
?>


    </main>
</body>
</html>
