
<?php 

/*

Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

*/

$testo= "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quae nobis officia consequuntur suscipit explicabo possimus pariatur dolorum amet asperiores dolores quis, neque soluta dolorem molestias. Harum dolor suscipit fugit laudantium ut? Id sunt veniam debitis eius atque mollitia esse magnam optio pariatur facilis facere, nobis blanditiis cupiditate officia? Voluptatem dolor facilis hic impedit vitae in commodi rerum, aspernatur unde facere repudiandae error. Magni veritatis blanditiis nostrum perferendis. Error expedita laboriosam, voluptatum dolor optio quibusdam, fugiat aut exercitationem similique quas qui temporibus ipsa culpa corrupti quae dignissimos neque excepturi. Iusto repudiandae aspernatur delectus dolorem quis ad deserunt autem praesentium aut provident doloremque beatae deleniti vero modi, fuga quidem possimus minus? Nulla, nobis! Hic, repellat fuga fugit commodi eum numquam incidunt beatae culpa obcaecati laborum aut maiores nemo unde cupiditate autem voluptate, officiis voluptas quasi sit minima! Dicta voluptatum temporibus rerum quibusdam numquam, provident dignissimos necessitatibus deleniti repellat cum veniam aperiam aspernatur illum vero! Officiis, at aspernatur quisquam cum commodi, architecto delectus aliquid quibusdam voluptates ad voluptate nisi omnis minus quod voluptatibus iure facilis aliquam itaque? Rem, omnis facere sit, debitis magnam repellat laborum recusandae illum illo ullam doloremque! Porro corporis reprehenderit consectetur aliquam nisi? Nostrum repellendus error beatae nisi aut dolorum, consequuntur ex. Optio laboriosam consequatur eveniet, tempore iure eius sed similique labore ipsa aliquid voluptatibus ipsam ratione alias reprehenderit consequuntur beatae ab fugiat explicabo libero sunt, quod et ipsum fuga? Repellat sapiente accusamus necessitatibus quidem sed aliquid debitis rem illum quaerat? Suscipit placeat unde ad voluptates, rerum quia aperiam veniam perspiciatis ipsum nihil iusto harum similique magni corporis, dolorum eius eveniet. Officia vel sequi animi soluta maiores commodi temporibus sit facere odio! Unde ea corporis excepturi, corrupti exercitationem nam consequatur! Quo, repudiandae. Enim, possimus accusantium obcaecati beatae harum aliquid. Maxime deleniti ducimus corrupti voluptate sequi tempora quae praesentium officia quidem?";

$testo_diviso= explode('.', $testo);

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
  
<h1>Il testo da dividere:</h1>

<p><?php echo $testo; ?></p>
<hr>

<h2>Il testo diviso :</h2>

<ul>
  <?php for($i=0; $i< count($testo_diviso); $i++):
    if(!empty($testo_diviso[$i])):?>
    <li> <?php echo $testo_diviso[$i]; ?></li>
    <?php endif; ?>
  <?php endfor; ?>
</ul>

</body>
</html>