<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>

<body>
    <header>
        <a href="index.html"><img src="../items/logo.png" alt="logo site" id="logo"></a>

        <nav>
            <ul>
                <li><a href="marketplace.php">Nos vélos</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="../apropos.html">A Propos</a></li>
            </ul>
        </nav>
    </header>
    <main action="contact.php"class="contact">
        <div id="contact-page">
            <form action="contact.php" method="post">
                <div class="form-group">
                    <label for="nom">Nom :</label>
                    <input type="text" name="nom" id="nom">
                </div>
                <div class="form-group">
                    <label for="prenom">Prénom :</label>
                    <input type="text" name="prenom" id="prenom">
                </div>
                <div class="form-group">
                    <label for="email">Email :</label>
                    <input type="email" name="email" id="email">
                </div>
                <div class="form-group">
                    <label for="message">Message :</label>
                    <textarea name="message" id="message"></textarea>
                </div>
                <button type="submit">Envoyer</button>
            </form>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2623.469044703131!2d2.235470476658105!3d48.88739757133607!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e6651cdd16e75f%3A0x56c8c47a267e44f1!2sLA%20DEFENSE%2C%2020%20BIS%20Jardins%20Boieldieu%2C%2092800%20Puteaux!5e0!3m2!1sfr!2sfr!4v1699875144086!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <?php
    include("bdd.php");
    try{
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $stmt = $bdd->prepare("INSERT INTO infos_contact (nom, prenom, message, email) VALUES (:nom, :prenom, :message, :email)");
    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':message', $message);
    $stmt->bindParam(':email', $email);
    $statu = $stmt->execute();
    
    }
    catch(PDOException $e){
        echo''. $e->getMessage();
    }
?>
    </main>
</body>

</html>

