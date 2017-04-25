<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Exo5-php-Les-fonctions</title>
</head>
<body>

  <p>EXO1</p>
  <p>
    <?php
      function exo1($essai1)
      {
          if ($essai1 == true)
          {
            echo "True";
          }
          else
          {
            echo "False";
          }
      }
      exo1($essai1 = true);
    ?>
  </p>



  <p>EXO2</p>
  <p>
    <?php
      function simple($unevariable)
      {
        echo $unevariable;
      }
      simple ($unevariable = "Bonjour!");
    ?>
  </p>

  <p>EXO3</p>
  <p>
    <?php
    ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting(-1);
      function double($var1, $var2)
      {
        echo $var1, $var2;
      }
      double($var1 = "illico ",$var2 = "presto");
    ?>
  </p>

  <p>EXO4</p>
  <p>
    <?php
      function concatener($nombre1, $nombre2)
      {
        if ($nombre1 == $nombre2)
          {
          echo $nombre1." et ".$nombre2." sont égaux";
          }
        elseif ($nombre1 < $nombre2)
          {
          echo $nombre1." est inférieur à  ".$nombre2;
          }
        else
          {
          echo $nombre1." est supérieur à ".$nombre2;
          }
      }
      concatener($nombre1 = 6, $nombre2 = 6);
    ?>
  </p>

  <p>EXO5</p>
  <p>
    <?php
      function chiffreetnombre($chiffre, $nombre)
      {
        echo $chiffre, $nombre;
      }
      chiffreetnombre($chiffre = "Je suis né en : ",$nombre = 1973);
    ?>
  </p>

  <p>##Exercice 6</p>
  <p>
    <?php
      function phrase($nom, $prenom, $age1)
      {
        echo "Salut ",$nom," ", $prenom,". Tu as ", $age1, " ans.";
      }
      phrase($nom = "Akoi",$prenom = "AKA",$age1 = 30);
    ?>
  </p>

  <p>EXO7</p>
  <p>
    <?php
    function ageetgenre($age2, $genre)
    {
      if ($genre == "homme" AND $age2 >= 18)
        {
        echo "Bonjour, vous êtes un homme et vous êtes majeur";
        }
      elseif ($genre == "femme" AND $age2 >= 18)
        {
        echo "Salut, vous êtes une femme et vous êtes majeure!";
        }
      elseif ($genre == "homme" AND $age2 < 18)
        {
        echo "Bonjour, tu es un homme et tu es mineur.";
        }
      else
        {
        echo "Salut, tu es une fille, et tu es mineure.";
        }
    }
    ageetgenre($age2 = 24, $genre = "femme");
    ?>
  </p>

  <p>EXO8</p>
  <p>
    <?php
    ini_set('display_errors',1);
    ini_set('display_startup_errors',1);
    error_reporting(-1);

      $n1 = 5;
      $n2 = 7;
      $n3 = 56;

      function additionsimple($n1, $n2, $n3)
      {
         $resultat = ($n1+$n2+$n3);
         echo $resultat;
      }
      additionsimple($n1, $n2, $n3);
    ?>
  </p>

</body> 
</html>
