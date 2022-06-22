<!-- Passare come parametri GET name, mail e age.
Verificare che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”. -->
<?php

$name = $_GET['name'];
$mail = $_GET['mail'];
$age = $_GET['age'];

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
   <div>
       <?php
           if (strlen($name) > 3 && filter_var($mail, FILTER_VALIDATE_EMAIL) && is_numeric($age)) {
            echo "Accesso riuscito";
            } else {
            echo "Accesso negato";
        }  
        ?>
   </div> 
</body>
</html>