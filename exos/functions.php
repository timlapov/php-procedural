<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Exos - Functions</title>
</head>

<body class="p-4">
    <?php include("../block/navbar.php"); ?>
    <h1 class="text-center text-danger">Exercices – functions</h1>
    <h2>Exo 1</h2>
    <p>
        <?php
        function direBonjour(string $name)
        {
            echo ("Bonjour, {$name}\n");
            echo ("Aujourd'hui " . date(format: 'd/m/Y'));
        }
        direBonjour("Timothée");
        ?>
    </p>
    <h2>Exo 2</h2>
    <p>
        <?php
        function arraySearch(array $array, mixed $needle): array
        {
            $result = [];
            for ($i = 0; $i < count($array); $i++) {
                if ($array[$i] === $needle) {
                    $result[] = $i;
                }
            }
            return $result;
        }
        $a = [1, 1, 1, 2, 5, '1', 0, 1];
        var_dump(arraySearch($a, 1));

        ?>
    </p>
</body>

</html>