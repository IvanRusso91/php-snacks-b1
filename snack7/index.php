
<?php 

/*

Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.

*/

$classe= [
  [
    "nome"=>"Paolo",
    "cognome"=>"Paoli",
    "voti"=>[25,18,29,30,22]
  ],
  [
    "nome"=>"Ugo",
    "cognome"=>"De Ughi",
    "voti"=>[23,25,29,27,21]
  ],
  [
    "nome"=>"Ilaria",
    "cognome"=>"Quarzani",
    "voti"=>[28,30,26,30,29]
  ],
  [
    "nome"=>"Francesca",
    "cognome"=>"Felice",
    "voti"=>[27,30,23,20,26]
  ],
];

$media= array_sum($classe[$i]['voti']) / count($classe[$i]['voti']);


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
  <h1>Classe Universitaria di Boolean!</h1>

  <ul>
    <?php for($i=0; $i < count($classe); $i++):?>
      <li>
        <h3>
        <?php echo $classe[$i]['nome']." ".$classe[$i]['cognome']." "."|"." "."media matematica"." ". array_sum($classe[$i]['voti']) / count($classe[$i]['voti']);?>
        </h3>
      </li>
    <?php endfor; ?>    
  </ul>
</body>
</html>