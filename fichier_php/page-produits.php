<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Produits</title>
</head>
<body>
    <header>
        <a href="index.html"><img src="../items/logo.png" alt="logo site" id="logo"></a>
        <nav>
            <ul>
                <li><a href="marketplace.php">Nos vélo</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="../apropos.html">A Propos</a></li>
            </ul>
        </nav>
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
echo "<button id='bouton-commander'>Commander</button>";
echo "</div>";
echo "</div>";
echo "<h2 id='titre-avis'> Les avis que nos clients nous on laissé</h2>";
echo "<span id='avis-produits'>" . $produits['avis'] . "</span>";

?>


    </main>
</body>
</html>
