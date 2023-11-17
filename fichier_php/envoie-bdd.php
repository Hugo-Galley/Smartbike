<?php
include('bdd.php');
switch($_POST['id']){
    case 'contact' :
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
            break;
    case 'commande':
        try{
            $id = $_POST['velos_id'];
            $nom = $_POST["nom"];
            $prenom = $_POST["prenom"];
            $email = $_POST["email"];
            $message = $_POST["message"];
        
            $stmt = $bdd->prepare("INSERT INTO commandes (velos_id, nom, prenom, email,message) VALUES (?,?,?,?,?)");
        
            $statu = $stmt->execute([$id,$nom, $prenom, $message, $email,]);
            echo '<script type="text/javascript">
                    alert("Commande passé avec succés");
                    window.location.href = "index.php";
                  </script>';
            }
            catch(PDOException $e){
                echo''. $e->getMessage();
            }
            break;
    case 'ajout-velo':
            $nom = $_POST['nom'];
            $url = $_POST['url'];
            $url_2 = $_POST['url_2'];
            $url_3 = $_POST['url_3'];
            $prix = $_POST['prix'];
            $description = $_POST['description'];
            $avis = $_POST['avis'];
            $etoiles = $_POST['etoiles'];

            $new_velo = $bdd->prepare('INSERT INTO velos (nom,description,prix,photo_url,photo_url_2,photo_url_3,avis,note) VALUES (?,?,?,?,?,?,?,?)');

            if($new_velo->execute([$nom, $description,$prix, $url,$url_2,$url_3, $avis,$etoiles])){
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
            break;

}