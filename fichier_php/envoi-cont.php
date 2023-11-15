<?php
    include("bdd.php");
    try{
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $stmt = $bdd->prepare("INSERT INTO infos_contact (nom, prenom, message, email) VALUES (?,?,?,?)");
    
    if($statu = $stmt->execute([$nom, $prenom,$email, $email])){
        echo '<script type="text/javascript">
            alert("Le message a été envoyé!");
            window.location.href = "index.php";
          </script>';
    }
    else{
        echo '<script type="text/javascript">
            alert("Erreur!");
            window.location.href = "index.php";
          </script>';
    }
    
    }
    catch(PDOException $e){
        echo''. $e->getMessage();
    }
?>