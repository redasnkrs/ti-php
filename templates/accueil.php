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
    <h1>Page d'accueil</h1>
    <img src="img/armoiries.png" alt="">
    <div class="intro accueil">
      <p>Paris est la commune la plus peuplée et la capitale de la France.</p>
      <p>Paris, située au cœur du bassin parisien sur une boucle de la Seine, est le chef-lieu de la région Île-de-France et le centre de la métropole du Grand Paris. Divisée en vingt arrondissements, elle constitue depuis 2019 une collectivité à statut particulier nommée « Ville de Paris ». La ville a été profondément transformée sous le Second Empire par le baron Haussmann, qui a percé de larges avenues et construit de nombreux édifices.
      </p>
      <p>
        En 2020, Paris comptait 2,187 millions d'habitants. L'agglomération parisienne, avec 10,73 millions d'habitants, est la plus peuplée de France et la troisième du continent européen. Lutèce, l'ancienne Paris, était une cité importante dès l'Antiquité. Paris devient la capitale de la France sous les rois francs et se développe au cours des siècles pour devenir un centre majeur de l'enseignement, des arts et du pouvoir royal.</p>
      <p>Paris symbolise la culture française et est surnommée la Ville Lumière. Elle abrite des monuments mondialement connus comme la cathédrale Notre-Dame, la Tour Eiffel et l'Arc de Triomphe. Le Musée du Louvre est le musée d'art le plus grand et le plus visité au monde. Paris est également la capitale mondiale du luxe, avec de nombreuses marques de luxe et palaces. La ville accueille chaque année la prestigieuse semaine internationale de la mode et est réputée pour sa haute gastronomie.</p>
      <p>Paris est la capitale économique de la France, avec le quartier d'affaires de La Défense, le plus grand d'Europe. La région parisienne accueille de nombreuses institutions internationales et sièges sociaux de grandes entreprises. Paris est également le siège d'organismes européens et internationaux comme l'UNESCO et l'OCDE. La région parisienne est l'une des plus riches d'Europe et a été désignée capitale européenne de la culture en 1989 et capitale européenne de l'innovation en 2017.
      </p>
    </div>
    <p>Dans ce site, vous trouverez diverses informations concernant :</p>
    <div class="liste-link">
      <ul>
        <li><a href="?p=geo">Une brève présentation de Bruxelles sur son rôle en Belgique et dans le monde</a></li>
        <li><a href="?p=hist">Un rappel historique, de sa fondation à aujourd'hui</a></li>
        <li><a href="?p=cult">Un tour d'horizon en matière d'art et culture</a></li>
        <li><a href="?p=gal">Une galerie de photographies</a></li>
        <li><a href="?p=form">un formulaire pour nous contacter</a></li>
        <li><a href="?p=link">Des liens vers des sites partenaires</a></li>
      </ul>
    </div>



    <p>Sources : <a href="https://fr.wikipedia.org/wiki/Paris" target="_blank">wikipedia</a> - Ville de Paris</p>

  </section>

</body>

</html>