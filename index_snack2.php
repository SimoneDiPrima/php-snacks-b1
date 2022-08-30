<?
    if(!empty($_GET)){
        $name = $_GET['name'];
        $mail = $_GET['mail'];
        $age = $_GET['age'];
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
    <h2>SCRIVI I TUOI DATI DI ACCESSO:</h2>
    <form action="" method="GET">
        <div>
            
            <label for="name">Nome</label>
            <input type="text" id="name" name="name" >
        </div>    
        <br>
        <div>
            <label for="mail">Email</label>
            <input type="text" id="mail" name="mail">
        </div>
        <br>
        <div>
            <label for="age">Anni</label>
            <input type="number" id="age" name="age">
        </div>
            <button type="submit">INVIA</button>
        </div>
    </form>

    <div>
         <?php
        if(isset($name,$mail,$age))
           : ?>
           <h2>ACCESSO RIUSCITO</h2>
            <h4>benvenuto <?= $name ?> </h4>
    </div>
    <div>
    
    <h2>
    <?php else : ?>
    ACCESSO NEGATO
    <?php endif ; ?>
    </h2>

</body>
</html>