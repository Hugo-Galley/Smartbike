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
    <link rel="stylesheet" href="../scripts_annexe/style.css">
</head>
<header>
        
<?php
        require_once("header.php");
        ?>
</header>
    <section>
        <h1>Commander votre vélo</h1>

        <form action="envoie-bdd.php" method="post">
            <label for="velo">Sélectionnez un vélo :</label>
            <select name="velos_id">
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
            <input type="hidden" name="id" value="commande">

            <button type="submit">Envoyer</button>
        </form>
    </section>

</body> 
</html>
