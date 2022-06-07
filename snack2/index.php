
<?php

/*

Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”

*/

echo"<pre>";
var_dump($_GET);
echo"</pre>";

$isAuth = true;

if( empty($_GET['name']) || empty($_GET['age']) || empty($_GET['mail'])){
  $isAuth = false;
}elseif(strlen($_GET['name']) < 3){
  $isAuth = false;
}elseif(!strpos($_GET['mail'],'@' ) || !strpos($_GET['mail'],'.' )){
  $isAuth = false;
}elseif(!is_numeric($_GET['age'])){
  $isAuth = false;
}

if($isAuth ){
  $output= 'Accesso riuscito';
}else{
  $output= 'Accesso non riuscito';
};

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
  
<h1>Controllo delle credenziali</h1>

<h2> <?php echo $output?></h2>

</body>
</html>