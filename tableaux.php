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


      ?>

    </table>


    </body>
</html>
