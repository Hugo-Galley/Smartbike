<?php
include("bdd.php");

// Récupérer tous les vélos depuis la base de données
$velos = $bdd->query("SELECT nom FROM velos")->fetchAll();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Commander - Smartbike</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="accueil.php">Accueil</a></li>
                <li><a href="produits.php">Nos Vélos</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="apropos.php">À Propos</a></li>
            </ul>
        </nav>
    </header>

    <section>
        <h1>Commander votre vélo</h1>

        <form action="traitement_commande.php" method="post">
            <label for="velo">Sélectionnez un vélo :</label>
            <select name="velo">
                <?php foreach ($velos as $velo): ?>
                    <option value="<?php echo $velo['nom']; ?>"><?php echo $velo['nom']; ?></option>
                <?php endforeach; ?>
            </select>

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="email">Email :</label>
            <input type="email" id="email" name="email" required>

            <label for="message">Message :</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit">Envoyer</button>
        </form>
    </section>

</body> 
</html>
