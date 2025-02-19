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
    <h1>Galerie</h1>
    <div class="img-grid">
      <div class="item">
        <img src="img/480px_Arcdetriomphe.jpg" alt="Arc de Triomphe">
        <p>Arc de Triomphe</p>
      </div>
      <div class="item">
        <img src="img/480px_La_Tour_Eiffel_vue_de_la_Tour_Saint-Jacques.jpg" alt="Tour Eiffel">
        <p>Tour Eiffel</p>
      </div>
      <div class="item">
        <img src="img/480px_Palais_Royal_station_entrance.jpg" alt="Palais Royal">
        <p>Palais Royal</p>
      </div>
      <div class="item">
        <img src="img/480px_Paris_Opera_full_frontal_architecture.jpg" alt="Opéra de Paris">
        <p>Opéra de Paris</p>
      </div>
      <div class="item">
        <img src="img/480px_Petit_Palais_Paris.jpg" alt="Petit Palais de Paris">
        <p>Petit Palais de Paris</p>
      </div>
      <div class="item">
        <img src="img/480px_Tuileries-Roue.jpg" alt="Tuileries">
        <p>Tuileries</p>
      </div>
    </div>



  </section>
</body>

</html>