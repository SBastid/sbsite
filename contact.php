<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="icon" href="img/logo.png" />
    <link rel="stylesheet" href="style.css">
    <meta charset="utf-8">
    <title>Me contacter</title>
  </head>
  <body>
    <ul>
      <li><a href="index.html">Samuel Bastide</a></li>
    </ul>
    <form class="formulaire" action="/contact.php" method="post">
      <div class="">
         <label for="Nom">Nom:</label>
         <input type="text" name="Nom">
      </div>
      <div class="">
         <label for="Prénom">Prénom:</label>
         <input type="text" name="Prenom">
      </div>
      <div class="">
         <label for="Email">Adresse Email:</label>
         <input type="email" name="mail">
      </div>
      <div class="">
         <label for="Message">Message:</label>
         <textarea name="Message" rows="8" cols="80"></textarea>
      </div>
    </form>
  </body>
</html>
