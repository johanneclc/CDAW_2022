<!DOCTYPE html>
<html>
    <head>
        <title>EXO 1 : DATE</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>
    
    <body>
        <h1>DATE</h1>
        <?php
            date_default_timezone_set('CET');
            echo 'Hello World <br>'; //Ceci est un commentaire PHP
            echo time().'<br>'; 
            echo date('d/m/Y'). '<br>';
            echo date('h:i:s').'<br>';
        ?>
        <p>Un paragraphe</p>
    </body>
</html>
