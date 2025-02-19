<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Document</title>
</head>

<body>

  <section class="bann">
    <?php include "inc/banniere.php" ?>
  </section>

  <nav>
    <?php include "inc/menu.php" ?>
  </nav>
  <section class="top-page">
    <h1>Page de Contact</h1>
    <img src="img/contacts.jpg" alt="">
  </section>
  <section class="formulaire">
    <div class="container">
      <form action="">

        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name..">

        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="Homme">Homme</option>
          <option value="canada">Femme</option>
        </select>

        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

        <input type="submit" value="Submit">

      </form>
    </div>
</body>

</html>