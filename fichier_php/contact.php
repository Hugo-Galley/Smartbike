<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../scripts_annexe/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Agbalumo&family=Roboto+Mono:wght@500&display=swap" rel="stylesheet">
    <title>Document</title>
</head>

<body>
    <header>
        <?php
        require_once("header.php");
        ?>
    </header>
    <main ' class="contact">
        <div id="contact-page">
            <form action="envoie-bdd.php" method='post'>
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
                <input type="hidden" name="id" value="contact">
                <button type="submit">Envoyer</button>
            </form>
        </div>
    </main>
    <footer>
        <?php
            require_once("footer.php")
        ?>
    </footer>
</body>

</html>

