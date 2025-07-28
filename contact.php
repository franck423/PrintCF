<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contactez-nous</title>
  <link rel="stylesheet" href="styles.css">
</head>
<main>
  <h2>Contactez-nous</h2>
  <form method="post" action="traitement.php" class="contact-form">
    <div class="form-group">
      <label for="nom">Nom</label>
      <input type="text" id="nom" name="nom" placeholder="Votre nom" required>
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Votre email" required>
    </div>
    <div class="form-group">
      <label for="message">Message</label>
      <textarea id="message" name="message" placeholder="Votre message" required></textarea>
    </div>
    <button type="submit" class="btn">Envoyer</button>
  </form>
</main>
<?php include 'footer.php'; ?>