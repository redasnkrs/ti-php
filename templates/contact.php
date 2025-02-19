<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title><?= $title ?></title>
</head>

<body>

  <section class="bann">
    <?php include "inc/banniere.php" ?>
  </section>

  <nav>
    <?php include "inc/menu.php" ?>
  </nav>
  <section class="top-page">
    <h1>Pour nous contacter</h1>
    <img src="img/contacts.jpg" alt="">
    <div class="formulaire">
      <form action="">
        <div class="row">
          <label for="nom">Nom:</label>
          <input type="text">
        </div>
        <div class="row">
          <label for="prenom">Prenom:</label>
          <input type="text">
        </div>
        <div class="row">
          <label for="prenom">Ville:</label>
          <input type="text">
        </div>
        <div class="row">
          <label for="email">E-MAIL:</label>
          <input type="text">
        </div>
        <div class="row">
          <label for="commentaire">Commentaire:</label>
        </div>
        <textarea name="commentaire" id="comm"></textarea>

        <input type="submit" value="Envoyer votre message">
      </form>
    </div>
  </section>

</body>

</html>