<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</body>

</html>