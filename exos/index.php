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
    <?php include("../block/navbar.php"); ?>
    <h1 class="text-center m-3"><?php echo ($title) ?></h1>
    <h2 class="text-center">Exo 1 - Déclarer variables</h2>
    <ul>
        <li>Une variable contenant votre nom</li>
        <?php
        $name = "Timothée";
        ?>
        <p><code>$name = "Timothée";</code></p>
        <li>Une variable contenant votre age</li>
        <?php
        $age = 35;
        ?>
        <p><code>$age = 35;</code></p>
        <li>Une variable contenant votre taille</li>
        <?php
        $taille = 1.8;
        ?>
        <p><code>$taille = 1.8;</code></p>
        <li>Une variable contenant un booléen $isHuman</li>
        <?php
        $isHuman = true;
        ?>
        <p><code>$isHuman = true;</code></p>
        <li>Une variable tableau contenant vos variables</li>
        <?php
        $tableau = [$name, $age, $taille, $isHuman];
        ?>
        <p><code>$tableau = [$name, $age, $taille, $isHuman];</code></p>
    </ul>
    <h2 class="text-center">Exo 2 - Concaténation</h2>
    <ul>
        <li>Dans une nouvelle variable concaténer vos informations et les afficher ex: "Je m'appelle X j'ai Y ans..."</li>
        <?php
        $itsMe = "Je m'appelle $name. J'ai $age ans, ma taille est $taille cm. Est-ce que je suis human ? La reponse est $isHuman";
        echo ($itsMe);
        ?>
        <p><code>$itsMe = "Je m'appelle $name. J'ai $age ans, ma taille est $taille cm. Est-ce que je suis human ? La reponse est $isHuman";
                echo ($itsMe);</code></p>
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
        <p><code> if (strlen($name) < 5) { <br>
                    echo ("Ton nom contient " . strlen($name) . " lettres");
                    } else { <br>
                    echo ("Ton nom est long il contient " . strlen($name) . " lettres"); <br>
                    }</code>
        </p>
        <li>
            Si votre age est inferieur à 20 afficher "Tu as de la chance, d'etre jeune
        </li>
        <li>
            Sinon : "Force"
        </li>
        <?php
        echo ($age < 20 ? "Tu as de la chance, d'etre jeune" : "Force");
        ?>
        <p><code>echo ($age < 20 ? "Tu as de la chance, d'etre jeune" : "Force" );</code>
        </p>
        <li>
            Si vous etes humain et que votre nom contient le lettre G, afficher " Tu es Gaetan ?"
        </li>
        <li>
            Sinon : "Bonjour VOTRE_NOM"
        </li>

        <?php
        if (str_contains($name, "G")) {
            echo ("Tu es Gaetan ?");
        } else {
            echo ("Bonjour $name");
        }
        ?>
        <p><code> if (str_contains($name, "G")) { <br>
                echo ("Tu es Gaetan ?"); <br>
                } else { <br>
                echo ("Bonjour $name"); <br>
                }</code></p>
    </ul>
    <?php
    var_dump($tableau);
    ?>
    <h3 class="text-center">Exo 4 – Les boucles for</h3>
    <ul>
        <li>
            <p><code> $message = "J'adore le croissant !"; <br>
                    for ($i = 0; $i < strlen($message); $i++) { <br>
                        if ($i % 2 == 0) { <br>
                        echo ('<span style="color: red;">' . $message[$i] . '</span>'); <br>
                        } else { <br>
                        echo ($message[$i]); <br>
                        } <br>
                        }</code>
                <?php
                $message = "J'adore le croissant !";
                for ($i = 0; $i < strlen($message); $i++) {
                    if ($i % 2 == 0) {
                        echo ('<span style="color: red;">' . $message[$i] . '</span>');
                    } else {
                        echo ($message[$i]);
                    }
                }
                ?>
            </p>
        </li>
        <li>
            <code> $message = "Bonjour"; <br>
                $messageInverse = ''; <br>
                for ($i = strlen($message) - 1; $i >= 0; $i--) { <br>
                $messageInverse[strlen($message) - 1 - $i] = $message[$i]; <br>
                } <br>
                var_dump($messageInverse); <br></code>
            <?php
            $message = "Bonjour";
            $messageInverse = '';
            for ($i = strlen($message) - 1; $i >= 0; $i--) {
                $messageInverse[strlen($message) - 1 - $i] = $message[$i];
            }
            var_dump($messageInverse);
            ?>
            <code>var_dump(strrev($message)); <br></code>
            <?php
            var_dump(strrev($message));
            ?>
        </li>
        <li>
            <p>Créer un boucle qui tourne 10 fois et qui affiche a chaque tour: "Tour de boucle n° X"</p>
            <p>
                <code>
                    for ($i = 1; $i < 10; $i=$i + 1) { <br>
                        echo ("Tour de boucle n° " . $i . ' '); <br>
                        } <br>
                </code>
                <?php for ($i = 1; $i < 10; $i = $i + 1) {
                    echo ("Tour de boucle n° " . $i . '<br>');
                }
                ?>
            </p>
        </li>
        <li>
            <p>Créer un boucle qui affiche la table de multiplication de 5</p>
            <code> for ($i = 1; $i < 10; $i=$i + 1) { <br>
                    echo ($i . '* 5 = ' . $i * 5 . ' '); <br>
                    }</code>
            <p>
                <?php for ($i = 1; $i < 10; $i = $i + 1) {
                    echo ($i . '* 5 = ' . $i * 5 . '<br>');
                }
                ?>
            </p>
        </li>
        <li>
            <p>Créer un boucle qui compte de 100 a 50, deux par deux</p>
            <p>
                <code>for ($i = 100; $i >= 50; $i = $i - 2) { <br>
                    echo ($i . ' '); <br>
                    } <br></code>
                <?php for ($i = 100; $i >= 50; $i = $i - 2) {
                    echo ($i . ' ');
                }
                ?>
            </p>
        </li>
    </ul>
</body>

</html>