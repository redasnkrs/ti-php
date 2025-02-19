<?php
# Controller frontale

if (isset($_GET['p'])) {
  switch ($_GET['p']) {
    case "geo":
      include "../templates/geographie.php";
      break;
    case "hist":
      include "../templates/histoire.php";
      break;
    case "cult":
      include "../templates/culture.php";
      break;
    case "gal":
      include "../templates/galerie.php";
      break;
    case "form":
      include "../templates/contact.php";
      break;
    case "link":
      include "../templates/liens.php";
      break;
    default:
      include "../templates/page-404.php";
      break;
  }
} else {
  include "../templates/accueil.php";
}
