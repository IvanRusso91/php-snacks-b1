
<?php 

/*

Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

*/


function get_random_number($min, $max, $nItem){

  $number_array=[];

  if($max < $min){
    $new = $max;
    $max = $min;
    $min = $new;
  }

  if($nItem > ($max - $min)){
    $nItem = $max - $min + 1;
  }

  while(count($number_array) < $nItem){
    $number=rand($min, $max);

    if(!in_array($number, $number_array)){
      $number_array[]= $number;
    }
  }
  return $number_array;
}
 
$randomArray= get_random_number(1,100,15);

echo"<pre>";
var_dump($randomArray);
echo"</pre>";

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
  <h1>Numeri casuali</h1>
  <ul>
    <?php for($i = 0; $i < count($randomArray); $i++): ?>
      <li><?php echo $randomArray[$i]; ?></li>
    <?php endfor; ?>
  </ul>

  
</body>
</html>