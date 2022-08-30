<?php $myArray=[
    ["match" => "Olimpia Milano - Cantù" , "result" =>" | 55-60"],
    ["match" => "Olimpia Milano - Cantù" , "result" =>" | 95-90"],
    ["match" => "Olimpia Milano - Cantù" , "result" =>" | 105-100"],
    ["match" => "Olimpia Milano - Cantù" , "result" =>" | 85-90"],
    ["match" => "Olimpia Milano - Cantù" , "result" =>" | 95-100"],
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
        <h1>FINAL FIVE COPPA ITALIA:</h1>
        <ul>
        <?php for( $i=0 ; $i < count($myArray); $i++) :?>
            <li>
               <strong><?= $myArray[$i]["match"] ?></strong><em><?=  $myArray[$i]["result"]?></em>
            </li>
            <?php endfor; ?>
        </ul>
    </body>
    </html>