<?php

include('bdd.php');
$nom = $_POST['nom'];
$url = $_POST['url'];
$prix = $_POST['prix'];
$description = $_POST['description'];
$avis = $_POST['avis'];
$etoiles = $_POST['etoiles'];

$new_velo = $bdd->prepare('INSERT INTO velos (nom,description,prix,photo_url,avis,note) VALUES (?,?,?,?,?,?)');

if($new_velo->execute([$nom, $description,$prix, $url, $avis,$etoiles])){
    echo '<script type="text/javascript">
        alert("Le message a été envoyé!");
        window.location.href = "marketplace.php";
      </script>';
}
else{
    echo '<script type="text/javascript">
        alert("Erreur!");
        window.location.href = "marketplace.php";
      </script>';
}