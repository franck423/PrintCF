<?php $page = basename($_SERVER['PHP_SELF']); ?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Print CF</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <header>
    <img src="images/logo.jpg" alt="Logo Print CF" class="logo">
    <nav>
      <a href="index.php" class="<?= ($page == 'index.php') ? 'active' : '' ?>">Accueil</a>
      <a href="services.php" class="<?= ($page == 'services.php') ? 'active' : '' ?>">Services</a>
      <a href="realisations.php" class="<?= ($page == 'realisations.php') ? 'active' : '' ?>">Réalisations</a>
      <a href="about.php" class="<?= ($page == 'about.php') ? 'active' : '' ?>">À propos</a>
      <a href="contact.php" class="<?= ($page == 'contact.php') ? 'active' : '' ?>">Contact</a>
      <a href="membres.php" class="<?= ($page == 'membres.php') ? 'active' : '' ?>">Membres</a>
    </nav>
  </header>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      const menuItems = document.querySelectorAll('.menu_item');
      const currentPath = window.location.pathname.split('/');

      menuItems.forEach(item => {
        const itemPath = item.getAttribute('href').split('/').pop();

        if (itemPath === currentPath) {
          item.classList.add('active');
        }
      });
    });
  </script>
</body>

</html>