<?php
$title = "Exos - Énoncé";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo ($title) ?></title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>

<body>
    <h1 class="text-center m-3"><?php echo ($title) ?></h1>
    <h2 class="text-center">Exo 1 - Déclarer variables</h2>
    <ul>
        <li>Une variable contenant votre nom</li>
        <?php
        $name = "Timothée";
        ?>
        <li>Une variable contenant votre age</li>
        <?php
        $age = 35;
        ?>
        <li>Une variable contenant votre taille</li>
        <?php
        $taille = 1.8;
        ?>
        <li>Une variable contenant un booléen $isHuman</li>
        <?php
        $isHuman = true;
        ?>
        <li>Une variable tableau contenant vos variables</li>
        <?php
        $tableau = [$name, $age, $taille, $isHuman]
        ?>
    </ul>
    <h2 class="text-center">Exo 2 - Concaténation</h2>
    <ul>
        <li>Dans une nouvelle variable concaténer vos informations et les afficher ex: "Je m'appelle X j'ai Y ans..."</li>
        <?php
        $itsMe = "Je m'appelle $name. J'ai $age ans, ma taille est $taille cm. Est-ce que je suis human ? La reponse est $isHuman";
        echo ($itsMe);
        ?>
    </ul>
    <h2 class="text-center">Exo 3 - Conditions</h2>
    <ul>
        <li>
            Si votre name contient moins de 5 lettres afficher : "Ton nom contient NB_LETTRE lettres"
        </li>
        <li>
            Sinon : "Ton nom est long il contient NB_LETTRE lettres"
        </li>
        <?php
        if (strlen($name) < 5) {
            echo ("Ton nom contient " . strlen($name) . " lettres");
        } else {
            echo ("Ton nom est long il contient " . strlen($name) . " lettres");
        }
        ?>
        <li>
            Si votre age est inferieur à 20 afficher "Tu as de la chance, d'etre jeune
        </li>
        <li>
            Sinon : "Force"
        </li>
        <?php
        echo ($age < 20 ? "Tu as de la chance, d'etre jeune" : "Force")
        ?>
        <li>
            Si vous etes humain et que votre nom contient le lettre G, afficher " Tu es Gaetan ?"
        </li>
        <li>
            Sinon : "Bonjour VOTRE_NOM"
        </li>

        <?php
        if (strpos("G", $name)) {
            echo ("Tu es Gaetan ?");
        } else {
            echo ("Bonjour $name");
        }
        ?>
    </ul>
</body>

</html>