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
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <form>
            <label for="word">
                <input type="text" name='word' id='word' placeholder='inserisci la parola da censurare'>
                <button type="submit">Vai</button>
            </label>
        </form>
        <h1> parola da censurare: <?php echo $forbiddenWord;?> </h1>
        <hr>

        <h2>Paragrafo originale lunghezza --> <?php echo strlen($paragraph);?> </h2> 
        <p> <?php echo $paragraph;?></p>


        <h2>Paragrafo censurato lunghezza --> <?php echo strlen($paragraphCensored);?> </h2>   
        <p><?php echo $paragraphCensored ?></p>




        
    </body>
</html>