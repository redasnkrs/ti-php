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
      <form action="" class="contact-form">
        <div class="row">
          <label for="nom">NOM :</label>
          <input type="text" id="nom" name="nom">
        </div>
        <div class="row">
          <label for="prenom">PRENOM :</label>
          <input type="text" id="prenom" name="prenom">
        </div>
        <div class="row">
          <label for="ville">VILLE :</label>
          <input type="text" id="ville" name="ville">
        </div>
        <div class="row">
          <label for="email">E-MAIL :</label>
          <input type="email" id="email" name="email">
        </div>
        <div class="row">
          <label for="commentaire">COMMENTAIRES :</label>
          <textarea id="commentaire" name="commentaire"></textarea>
        </div>
        <input type="submit" value="Envoyer votre message" class="submit-btn">
      </form>

    </div>
  </section>

</body>

</html>