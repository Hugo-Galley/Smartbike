<?php
    include("bdd.php");
    try{
    $id = $_POST['velos_id'];
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $stmt = $bdd->prepare("INSERT INTO commandes (velos_id, nom, prenom, email,message) VALUES (:velos_id,:nom, :prenom, :email, :message)");
    $stmt->bindParam(':velos_id', $id);
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':message', $message);
    $stmt->bindParam(':email', $email);
    $statu = $stmt->execute();
    echo '<script type="text/javascript">
            alert("Le message a été envoyé!");
            window.location.href = "index.php";
          </script>';
    }
    catch(PDOException $e){
        echo''. $e->getMessage();
    }
?>