<?php

/*

Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.

*/

$posts = [

  '10/01/2019' => [
      [
          'title' => 'la terra dei canguri',
          'author' => 'Bianca &  Berny',
          'text' => 'Testo per bambini'
      ],
      [
          'title' => 'Il mulino dei 12 corvi',
          'author' => 'Michele Papagni',
          'text' => 'Testo fatasy'
      ],
  ],
  '10/02/2019' => [
      [
          'title' => 'la torre sul mare',
          'author' => 'Biagio Papagni',
          'text' => 'Testo cultura'
      ]
  ],
  '15/05/2019' => [
      [
          'title' => 'Persi nel passato',
          'author' => 'ilaria quarzani',
          'text' => 'Testo fantascientifico'
      ],
      [
          'title' => 'mosche ',
          'author' => 'francesco Papagni',
          'text' => 'Testo post 5'
      ],
      [
          'title' => 'Post 6',
          'author' => 'Michele Papagni',
          'text' => 'Testo post 6'
      ]
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

  <style>
    .rectangle{
      width: 500px;
      height: 100px;
      margin-bottom: 20px;
      overflow: auto;
      background-color: lightblue;
      border-radius: 20px;
    }

  </style>


</head>
<body>
<?php foreach($posts as $data => $posters): ?>
  <div class="rectangle">
    <ul>
      <?php foreach($posters as $poster ): ?>
        <li>
          <?php echo $data?> -
          <?php echo $poster['title']?> -
          <?php echo $poster['author']?> -
          <?php echo $poster['text']?>
        </li>
      <?php endforeach; ?>  
    </ul>


  </div>
<?php endforeach; ?>  
</body>
</html>