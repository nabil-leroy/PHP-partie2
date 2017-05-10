<html>
    <head>
        <meta charset=UTF-8" />
        <title>Exercice 6 Partie 2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p>
            <?php
            $monAge = 24;

            if ($monAge >= 18) {
                $majeur = true;
                echo 'Vous etes majeur';
            } else {
                $majeur = false;
                 echo 'Vous etes mineur';
            }
            ?>
        </p>
    </body>
</html>
