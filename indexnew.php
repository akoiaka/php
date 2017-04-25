<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="utf-8">
      <title>Premier pas en PHP !</title>
    </head>

    <body>
<?php
$nom= $_POST["nom"];
echo $nom;
?>
<form action="indexnew.php" method="post">
  <input type="text" name="nom" value="">

<input type="submit" name="" value="cliquer">
</form>
</body>
</html>
