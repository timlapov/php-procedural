<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <h3 class="text-center">Exo 1</h3>
    <ul>
        <li>
            <p>Générer un tableau $fruits contenant "Pomme, Poire, Banane"</p>
            <?php
            $fruits = ["Pomme", "Poire", "Banane"]
            ?>
        </li>
        <li>
            <p>Afficher le tableau avec var_dump()</p>
            <?php
            var_dump($fruits);
            ?>
        </li>
        <li>
            <p>Devinez les valeurs des variables avec le code suivant
                $fruits[1] = $fruits[2]; valeur fruits[1] ? $fruits[2] = $fruits[3]; valeur fruits[2]?</p><br>
        </li>
    </ul>
    <div class="fuits">
        <?php
        $iMax = count($fruits);
        for ($i = 0; $i < $iMax; $i++) {
            echo ("<p>{$fruits[$i]}</p>");
        }
        ?>
    </div>
    <div>
        <?php
        $voiture = [
            "marque" => "Citroen",
            "model" => "C4",
            "portes" => 5,
            "isAuto" => true,
        ];
        foreach ($voiture as $key => $value) {
            echo $key . " : " . $value . "<br>";
        };
        ?>
    </div>
    <div>
        <h2>
            <?php
            echo ($voiture["marque"] . " | " . $voiture["model"]);
            ?>
        </h2>
        <p>
            <?php
            echo ("Portes : " . $voiture["portes"] . " et " . ($voiture["isAuto"] ? "avec la boîte de vitesses automatique" : "avec la boîte de vitesses manuelle"));
            ?>
        </p>
    </div>
    <h3 class="text-center">Exos finales</h3>
    <h4 class="text-center">Exercice 1</h4>
    <div>
        <p>
            <code>

            </code>
        </p>
        <p>
            <?php
            $numbers = [];
            for ($i = 0; $i < 10; $i++) {
                $numbers[$i] = random_int(0, 100);
            }
            var_dump($numbers);

            $length = count($numbers);
            $odds = [];
            $even = [];

            for ($i = 0; $i < $length; $i++) {
                $numbers[$i] % 2 === 0 ? array_push($even, $numbers[$i]) : array_push($odds, $numbers[$i]);
            }
            asort($odds);
            asort($even);
            var_dump($odds);
            echo ("<br>");
            var_dump($even);
            ?>
        </p>
    </div>
    <h4 class="text-center">Exercice 3</h4>
    <div>
        <p>
            <code>

            </code>
        </p>
        <p>

        </p>
    </div>
</body>

</html>