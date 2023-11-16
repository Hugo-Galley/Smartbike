<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
    <title>Marketplace</title>
</head>
<body>
    <header>
    <?php
        require_once("header.php");
        ?>
    </header>
    <main>
        <div class='div-tri'>
    <h2 id='titre-market'>Nos vélos Proposé à la Vente</h2>
<form method="post" action="marketplace.php" id="form-tri">
    <!-- Le formulaire est envoyé à "traitement.php" avec la méthode POST -->
    <label for="choix">Selcetionner votre affichage</label>
    <select name="choix" id="choix">
        <option value="1">Normal</option>
        <option value="2">Ordre Prix Croissant</option>
        <option value="3">Ordre Prix Décroissant</option>
        <option value="4">Orde Alphabetique</option>
        <option value="5">Ordre Anti-Alphabetique</option>
        <option value="6">Les mieux notés</option>
    </select>
</form>
</div>
<script>
    // Récupérer l'élément select
    var selectElement = document.getElementById('choix');

    // Ajouter un écouteur d'événements pour le changement
    selectElement.addEventListener('change', function () {
        // Soumettre automatiquement le formulaire lorsque le changement se produit
        document.getElementById('form-tri').submit();
    });
</script>

        <div class="appercu-velo">
        <?php
        
include("bdd.php");
if (isset($_POST['choix'])) {
    switch ($_POST['choix']) {
        case '1':
            $velos = $bdd->query("SELECT * FROM velos")->fetchAll(PDO::FETCH_ASSOC);
            break;
        case '2':
            $velos = $bdd->query("SELECT * FROM velos ORDER BY prix")->fetchAll(PDO::FETCH_ASSOC);
            break;
        case '3':
            $velos = $bdd->query("SELECT * FROM velos ORDER BY prix DESC")->fetchAll(PDO::FETCH_ASSOC);
            break;
        case '4':
            $velos = $bdd->query("SELECT * FROM velos ORDER BY nom")->fetchAll(PDO::FETCH_ASSOC);
            break;
        case '5':
            $velos = $bdd->query("SELECT * FROM velos ORDER BY nom DESC")->fetchAll(PDO::FETCH_ASSOC);
            break;
        
        case '6' : 
            $velos = $bdd->query("SELECT * FROM velos ORDER BY note DESC ")->fetchAll(PDO::FETCH_ASSOC);
            break;  



    }

}
else {
    $velos = $bdd->query("SELECT * FROM velos")->fetchAll(PDO::FETCH_ASSOC);

}



foreach ($velos as $velo) {
    echo '<span>';
    echo '<a href="page-produits.php?id_velos=' . $velo['id_velos'] . '" id="info-market-velo">';
    echo '<img src="' . $velo['photo_url'] . '" alt="Photo de vélo">';
    echo "<p id='info-velo'>".$velo['nom'].'</p>';
    echo "<p id='info-velo'>".$velo['prix']."</p>";
    echo '</a>';
    echo '</span>';
}
?>

        </div>
    </main>
</body>
</html>
