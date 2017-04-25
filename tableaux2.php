<!DOCTYPE html>
<html lang="fr">
    <head>
      <meta charset="utf-8">
      <title>Premier pas en PHP !</title>
    </head>

    <body>
<?php


       // <tr>
      // <td>'mois' => 'nom', </tr>

        $mois = array ('janvier','fevrier','mars');

foreach ($mois as $key => $value) {
  echo $key . $value;
  # code...
}
echo "<hr>";

$mois['gateaux'] = 'janvier';
$mois['faitbienfoid'] = 'fevrier';
$mois['fleurs'] = 'mars';
$mois['ne te devouvre pas d un fil'] = 'avril';
$mois['ce qu il te plait'] = 'mai';
$mois['ouin'] = 'juin';
$mois[] = 'juillet';
$mois[8] = 'aout';
$mois['l hiver approche'] = 'septembre';
$mois['Francis Cabrel'] = 'octobre';
$mois['il fait gris'] = 'novembre';
$mois['les cadeaux de Noel youpi !'] = 'decembre';

foreach ($mois as $key => $value) {
  echo "$key  .$value <br/>";
}
echo "<hr>";

echo $key3 .$value;

      ?>

    </body>
</html>
