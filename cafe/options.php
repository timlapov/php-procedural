<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Options</title>
</head>

<body>
    <?php include("../block/navbar.php"); ?>

    <?php
    if (isset($_GET['boisson'])) {
        $boisson = $_GET['boisson'];
    } else {
        $boisson = null;
    };
    if (isset($_GET['img'])) {
        $img = $_GET['img'];
    } else {
        $img = null;
    };
    ?>

    <h1 class="text-center text-bg-secondary">Moi c'est une machine a café</h1>
    <h2 class="text-center text-bg-success">Améliorez votre <?php echo (htmlspecialchars($boisson)); ?> par des options</h2>
    <p>
        <?php
        var_dump($_GET);
        ?>
    </p>
    <div class="container">
        <div class="row">
            <div class="col-4 bg-success">
                <img src=<?php echo ($img); ?> class="img-fluid" alt="...">
            </div>
            <div class="col-8 bg-secondary">
                <p>dbjaskdbkja`bdjka</p>
            </div>
        </div>
    </div>
</body>

</html>