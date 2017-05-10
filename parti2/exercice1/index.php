<html>
    <head>
        <meta charset=UTF-8" />
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <title>Exercice 1 Partie 2</title>
    </head>
    <body>
        <p>
            <?php
            $age = 24;
            if ($age <= 17) {
                echo "Tu es mineur !!!";
            } elseif ($age >= 18) {
                echo "Tu es majeur";
            }
            ?>
        </p>
    </body>
</html>
