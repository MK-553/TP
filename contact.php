<?php
// 1. TRAITEMENT DES DONNÉES (On fait ça tout en haut)
$affichage = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = htmlspecialchars($_POST['nom']);
    $message = htmlspecialchars($_POST['message']);
    
    // On prépare le message dans une variable
    $affichage = "<div style='background: #d4edda; color: #155724; padding: 15px; border: 1px solid #c3e6cb; margin-top: 20px;'>";
    $affichage .= "<strong>Message reçu !</strong><br>";
    $affichage .= "De : " . $nom . "<br>";
    $affichage .= "Message : " . $message;
    $affichage .= "</div>";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact - Portfolio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <section id="contact">
        <h2>Contactez-moi</h2>
        <form method="POST" action="contact.php">
            <input type="text" name="nom" placeholder="Votre Nom" required><br><br>
            <textarea name="message" placeholder="Votre Message" required></textarea><br><br>
            <button type="submit">Envoyer le message</button>
        </form>

        <?php echo $affichage; ?>
    </section>

</body>
</html>
