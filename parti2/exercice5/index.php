<html>
    <head>
        <meta charset=UTF-8" />
        <title>Exercice 5 Partie 2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p>
            <?php
            $maVariable = "homme";
            //  Variable Est différent de homme
            if ($maVariable != "homme") {
                echo "C\'est un développeuse !!!";
            }
            else
            {
                echo 'C\'est une développeur !!!'; 
            }
            ?>
        </p>
    </body>
</html>
