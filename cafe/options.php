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
    if (isset($_GET['price'])) {
        $price = $_GET['price'];
    } else {
        $price = null;
    };
    ?>

    <h1 class="text-center text-bg-secondary">Moi c'est une machine a café</h1>
    <h2 class="text-center text-bg-success">Améliorez votre <?php echo (htmlspecialchars($boisson)); ?> par des options</h2>
<!--    <p>-->
<!--        --><?php
//        var_dump($_GET);
//        ?>
<!--    </p>-->
    <div class="container pt-4">
        <div class="row">
            <div class="col-4">
                <img src=<?php echo ($img); ?> class="img-fluid" alt="...">
            </div>
            <div class="col-8">
                <form method="POST" action="ordre.php<?php echo("?boisson=$boisson&img=$img&price=$price")?>">
                <select class="form-select form-select-lg mb-3" name="size" aria-label="size">
                    <option selected>Taille standard</option>
                    <option>Taille M</option>
                    <option>Taille XL</option>
                    <option value="xxl">Taille XXL</option>
<!--                    <option value="xxl">Taille XXL</option>-->
                </select>
                <?php
                if ($boisson != "Espresso") {
                    echo (
                            "<select class='form-select form-select-lg mb-3' name='milk' aria-label='milk'>
                    <option selected>Lait demi-écremé</option>
                    <option>Lait de coco</option>
                    <option>Lait d'avoine</option>
                    <option>Lait de soja</option>
                </select>"
                    );
                }
                ?>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" name="sugar" id="sugarSwitch">
                    <label class="form-check-label" for="sugarSwitch">Du sucre ?</label>
                </div>
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" name="cannelle" id="cannelleSwitch">
                    <label class="form-check-label" for="cannelleSwitch">Du cannelle ?</label>
                </div>
<!--                <a href='--><?php //echo $link; ?><!--' class='btn btn-primary mt-5'>Commander</a>-->
                    <input type="submit" value="Commander" class="btn btn-primary mt-5">
                </form>
            </div>
        </div>
    </div>
</body>

</html>