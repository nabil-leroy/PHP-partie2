<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>exo2p2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p class="php">
            <?php
            //création de la variable de type booléen
            $IsEasy = false;
            //Si c'est true il s'affiche c'est facile
            if ($IsEasy == TRUE) {
                echo ' C\'est facile';
                //si c'est false il s'affiche c'est difficile
            } else {
                echo 'C\'est difficile';
            }
            ?>
            <?php
            //Si c'est true il s'affiche c'est facile
            if ($IsEasy) {
                echo "c'est facile";
                //si c'est false il s'affiche c'est difficile
            } else {
                echo "c'est difficile";
            }
            ?>
            <?php
            echo ($IsEasy ==true)? 'c\'est facile'  : 'c\'est difficile';
            ?>
        </p>
    </body>
</html>