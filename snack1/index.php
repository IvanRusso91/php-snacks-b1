
<?php

/*

Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60

*/

$partite=[
  [
    "casa" => "Brindisi",
    "ospite" => "Brescia",
    "punteggio_casa" => 83,
    "punteggio_ospite" => 88,
  ],
  [
    "casa" => "Reggiana",
    "ospite" => "VL Pesaro",
    "punteggio_casa" => 86,
    "punteggio_ospite" => 77,
  ],
  [
    "casa" => "Trento",
    "ospite" => "Dinamo Sassari",
    "punteggio_casa" => 66,
    "punteggio_ospite" => 74,
  ],
  [
    "casa" => "Derthona",
    "ospite" => "Olimpia Milano",
    "punteggio_casa" => 64,
    "punteggio_ospite" => 81,
  ],
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Partite di Basket della stagione 2021/2022!!</h1>

  <ul>
    <?php for($i=0; $i < count($partite); $i++): ?>
    <li><h3><?php echo $partite[$i]['casa']." "."-"." ".$partite[$i]['ospite']." "."/"." ". $partite[$i]['punteggio_casa']." "."-"." ". $partite[$i]['punteggio_ospite']?></h3></li>
    <?php endfor; ?>  
  </ul>
</body>
</html>