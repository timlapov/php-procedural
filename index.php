<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php include("block/navbar.php"); ?>
    <h1>Bases</h1>

    <?php
    $name = "Timothee";
    $age = 5;
    $isHuman = true;
    ?>

    <div>
        <p>
            <?php
            echo (" 1 Je m'appelle $name, j'ai " . $age / 2 . " ans");
            echo (" 2 Je m'appelle $name, j'ai {$age} ans");
            //echo (` 3 Je m'appelle {$name}, j'ai la moitié de {$age} ans`);
            ?>
        </p>
        <h2>Tableaux, conditions</h2>
        <?php
        $username = "Admin";
        $password = 123;

        if ($username === "Admin" && $password === 123) {
            echo ("Access granted");
        } else {
            echo ("Access denied");
        }

        //Si l'age est entre 10 et 15 afficher A
        //Si l'age est entre 16 et 20 afficher B
        //Si l'age est entre 21 et 30 afficher C
        //Si l'age est entre 31 et 50 afficher D
        //Si l'age superieur 51 afficher E
        echo ("\n\n $age ans : ");
        if ($age >= 10 && $age <= 15) {
            echo ("A");
        } else if ($age <= 20) {
            echo ("B");
        } else if ($age <= 30) {
            echo ("c");
        } else if ($age <= 50) {
            echo ("D");
        } else if ($age >= 50) {
            echo ("E");
        } else {
            echo ("Z");
        }


        ?>


    </div>
</body>