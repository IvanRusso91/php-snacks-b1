<?php
 
  $db = [
    'teachers' => [
      [
        'name' => 'Michele',
        'lastname' => 'Papagni'
      ],
      [
        'name' => 'Fabio',
        'lastname' => 'Forghieri'
      ]
    ],
    'pm' => [
      [
        'name' => 'Roberto',
        'lastname' => 'Marazzini'
      ],
      [
        'name' => 'Federico',
        'lastname' => 'Pellegrini'
      ]
    ]
  ];
 
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>

    .rectangle{
      width: 500px;
      height: 100px;
      margin-bottom: 20px;
      overflow: auto;
    }
    .teachers{
      background-color: gray;
    }
    .pm{
      background-color: green;
    }
  </style>

</head>
<body>
  <h1>dividere in 2</h1>
  
  <?php foreach($db as $role => $people): ?>
    <div class="rectangle <?php echo $role ?>">
    <ul>
      <?php foreach($people as $person):?>
        <li><?php echo "Name: ".$person['name']."; Cognome: ".$person['lastname'];?></li>
        <?php endforeach;?>
    </ul>
  </div>
  <?php endforeach; ?>  
</body>
</html>