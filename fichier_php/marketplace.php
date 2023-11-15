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
        include("header.php");
        ?>
    </header>
    <main>
        <h2 id='titre-market'>Nos vélos Proposés à la Vente</h2>
        <div class="appercu-velo">
        <?php
include("bdd.php");

$velos = $bdd->query("SELECT * FROM velos")->fetchAll(PDO::FETCH_ASSOC);

foreach ($velos as $velo) {
    echo '<span>';
    echo '<a href="page-produits.php?id_velos=' . $velo['id_velos'] . '">';
    echo '<img src="' . $velo['photo_url'] . '" alt="Photo de vélo">';
    echo '<p>'.$velo['nom'].'</p>';
    echo '<p>'.$velo['prix'].'</p>';
    echo '</a>';
    echo '</span>';
}
?>

        </div>
    </main>
</body>
</html>
