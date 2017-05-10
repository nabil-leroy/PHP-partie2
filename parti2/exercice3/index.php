<html>
    <head>
        <meta charset=UTF-8" />
        <title>Exercice 3 Partie 2</title>
        <link href="style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <p>
            <?php
            $age = 18;
            $genre = 'homme';
            if ($age >= 18 AND $genre == 'homme') {
                echo "Vous êtes un homme et vous êtes majeur";
            } elseif ($age <= 18 AND $genre == 'homme') {
                echo "Vous êtes un homme et vous êtes mineur";
            } elseif ($age >= 18 AND $genre == 'femme') {
                echo "Vous êtes une femme et vous êtes majeur";
            } elseif ($age <= 18 AND $genre == 'femme') {
                echo "Vous êtes une femme et vous êtes mineur";
            }
            ?>
        </p>
    </body>
</html>
