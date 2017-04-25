<!DOCTYPE html>
  <html>
    <head>

    </head>

    <body>
    <table>
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

echo "<hr>";
echo $key5 .$value;

echo "<hr>";
echo "departements DES HAUTS DE FRANCE <br/>";
$departements['02'] = 'AISNE';
$departements['59'] = 'NORD';
$departements['60'] = 'OISE';
$departements['62'] = 'Pas-de-Calais';
$departements['80'] = 'SOMME';

$nb_departements = count ($departements);
echo "le total des nombre de departements est $nb_departements";

foreach ($departements as $key => $value) {
echo "$key .$value <br/>";
}

echo "<hr>";
echo "EXERCICE 6 <br/>";
echo $departements['59'];

echo "<hr>";
echo "EXERCICE 7 <br/>";
$departements['51'] = 'Haute Marne';

echo "<hr>";
echo "EXERCICE 8 <br/>";

foreach ($mois as $key => $value) {
echo "$key .$value <br/>";
}

echo "<hr>";
echo "EXERCICE 9 <br/>";
foreach ($departements as $key => $value) {
echo "$key .$value <br/>";
}

echo "<hr>";
echo "EXERCICE 10 <br/>";
foreach ($departements as $key => $value) {
echo " Le départment $value a le numéro $key <br/>";
}






      ?>

    </table>


    </body>
</html>
