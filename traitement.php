<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $nom = htmlspecialchars($_POST['nom']);
  $email = htmlspecialchars($_POST['email']);
  $message = htmlspecialchars($_POST['message']);

  // Traitement ou envoi d’email ici
  echo "<p>Merci $nom ! Votre message a bien été envoyé.</p>";
  echo "<p><a href='index.php'>Retour à l’accueil</a></p>";
}
