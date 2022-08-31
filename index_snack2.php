<?
    if(!empty($_GET)){
        $name = $_GET['name'] ?? '';
        $mail = $_GET['mail'] ?? '';
        $age = $_GET['age'] ?? '';
    }
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
    <?php
        if(!isset($name,$mail,$age))
           : ?>
          scrivi i tuoi dati come solo te sai fare bomber!
           <div>
            <?php elseif(strlen($name) < 3) : ?>
                <h4>ACCESSO NEGATO</h4>
           </div>
           
            <div>
                <h3>
                <?php elseif(!is_numeric($age)) : ?>
                    <h2>ACCESSO NEGATO </h2>
                </h3>
            </div>
            <div>
                <h3>
                <?php elseif(!strpos($mail,'@') ) : ?>
                    <h2>ACCESSO NEGATO</h2>
                </h3>
            </div>
            <div>
                <h3>
                <?php elseif(!strpos($mail,'.')) : ?>
                    <h2>ACCESSO NEGATO</h2>
                </h3>
            </div>
            <div>
                <h3>
                <?php else : ?>
                    <h2>ACCESSO RIUSCITO</h2>
                </h3>
            </div>
            <?php endif; ?>
</body>
</html>