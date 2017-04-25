<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <title>Mardi 18 Avril 2017</title>
  </head>

  <body>
<p><?php

$age = 20;
if($age <= 18)
{
  echo "Vous êtes mineur";
}
else
  {
  echo "Vous êtes majeur";
}
$genre_s = array("un homme","koolaid1"=> "une femme");
echo "<p>Vous êtes $genre_s[0].</p>".PHP_EOL;
echo "<p>Vous êtes $genre_s[koolaid1].</p>".PHP_EOL;

$age_v = array("mineur","koolaid2"=>"majeur");

echo "<p>Vous êtes $genre_s[0] et vous êtes $age_v[koolaid2]</p>";
echo "<p>vous êtes $genre_s[0] et vous êtes $age_v[0]</p>";
echo "<p>vous êtes $genre_s[koolaid1] et vous êtes $age_v[koolaid2]</p>";
echo "<p>vous êtes $genre_s[koolaid1] et vous êtes $age_v[0]</p>";


$age2=10;
if ($age2 >= 18)
  {
    echo "<p>Tu es majeur</p>";
  }
    else
  {
  echo "<p>Tu n'es pas majeur</p>";
  }
$verif=array("?","");
if ($verif == "?")
  {
    echo "Ce n'est pas bon";
  }
    else
  {
    echo "C'est ok!";
  }

?></p>
  </body>
  </html>
