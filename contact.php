<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact - Mon Portfolio</title>
</head>
<body>
    <h2>Contactez-moi</h2>
    
    <form method="POST" action="contact.php">
        <label>Nom :</label><br>
        <input type="text" name="nom" required><br><br>
        
        <label>Message :</label><br>
        <textarea name="message" required></textarea><br><br>
        
        <button type="submit">Envoyer</button>
    </form>

    <hr>

    <?php
    // Objectif : Récupérer les données et afficher le message envoyé
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nom = htmlspecialchars($_POST['nom']);
        $message = htmlspecialchars($_POST['message']);

        echo "<h3>Message reçu !</h3>";
        echo "<p><strong>De :</strong> " . $nom . "</p>";
        echo "<p><strong>Message :</strong> " . $message . "</p>";
    }
    ?>
</body>
</html>
