<?php
// Si tu vois ce code, c'est que le fichier n'est pas exécuté par le serveur
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bases - Index</title>

</head>

<body>

    <h1>Bases - Index</h1>

    <h2>Variables</h2>
    <?php
    $name = "Gaëtan"; // STRING
    $age = 27; // int   
    $isHuman = true; // booleen
    $height = 175.6; // float
    ?>

    <h3>Concaténation</h3>
    <p>
        "Je m'appelle" . $name . ", j'ai" . $age ."ans" = >
        <?php
        echo ("Je m'appelle" . $name . ", j'ai " . $age . " ans");
        ?>
    </p>
    <p>"Je m'appelle {$name}, j'ai {$age} ans" = >
        <?php
        echo ("Je m'appelle {$name}, j'ai {$age} ans");
        ?>
    </p>
    <h3>Tableaux</h3>
    <h2>Conditions</h2>
    <p>if("1" = = 1) => <?php var_dump("1" == 1); ?></p>
    <p>if("1" = = = 1) => <?php var_dump("1" === 1); ?></p>

    <?php

    $username = "Admin";
    $password = "123";

    echo (($username === "Admin" && $password === "123") ? "Bienvenue $username" : "Erreur");


    $age = 12;

    $message = "";

    if ($age < 10) {
        $message = "Z";
    } else if ($age >= 10 && $age <= 15) {
        $message = "A";
    } else if ($age <= 20) {
        $message = "B";
    } else if ($age <= 30) {
        $message = "C";
    } else if ($age <= 50) {
        $message = "D";
    } else if ($age > 51) {
        $message = "Z";
    }


    ?>
    <p>Résultat $age = <?php echo ("$age => $message") ?> </p>


    <h3>Booleens</h3>
    <p>if( $isHuman === true ) equivalent à if( $isHuman ) </p>
    <p>if( $isHuman === false ) equivalent à if( !$isHuman ) </p>
    <h2>Fonctions</h3>

        <p>
            La fonction ini_get permet de recuperer la configuration d'un parametre
        </p>
        <p>
            Par exemple ini_get('display_errors') : <?php var_dump(ini_get('display_errors')); ?>
        </p>
        <p>
            La fonction ini_set permet de modifier la configuration d'un parametre
        </p>
        <p>
            Par exemple ini_set('display_errors',0) : <?php ini_set('display_errors', 0); ?>
        </p>

        </div>

</body>

</html>