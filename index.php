<?php
    // variables
    $paragraph = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quidem odio eum eaque. Perspiciatis explicabo porro a voluptates, voluptatum rem aliquid dicta beatae, officiis eius, sunt nobis inventore aspernatur doloremque error?';

    $forbiddenWord = $_GET['word'];

    $paragraphCensored = str_replace($forbiddenWord, '***', $paragraph)
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

        <p> <h2>Paragrafo originale:</h2>  <?php echo $paragraph;?> </p>

        <h3> lunghezza paragrafo originale: <?php echo strlen($paragraph);?> </h3>

        <h2> parola da censurare: <?php echo $forbiddenWord;?> </h2>

        <p> <h1>Paragrafo censurato:</h1> <?php echo $paragraphCensored;?>  </p>

        <h3> lunghezza paragrafo censurato: <?php echo strlen($paragraphCensored);?> </h3>




        
    </body>
</html>