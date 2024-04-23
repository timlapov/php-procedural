<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordre</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
<?php
if (isset($_POST['size'])) {
    $size = $_POST['size'];
} else {
    $size = null;
}

?>
<h1 class="text-center text-bg-secondary">Moi c'est une machine a café</h1>
<h2 class="text-center text-bg-success">Confirmez votre commande</h2>
<div class="container">
    <div class="row">
        <div class="col-4">
            <img src=<?php echo ($img); ?> class="img-fluid" alt="...">
        </div>
        <div class="col-8">
            <p class="pt-5">
                Vous avez choisi un <?php echo($boisson); ?> de <?php echo($size); ?>
            </p>
            <?php
            if (isset($_POST['milk'])) {
                echo ("<p>Avec du {$_POST['milk']}<p>");
            }
            ?>

                <?php
                if (isset($_POST['sugar'])) {
                    if ($_POST['sugar'] == "on") {
                        echo ("<p>Avec du sucre<p>");
                    }
                }
                ?>
            <?php
            if (isset($_POST['cannelle'])) {
                if ($_POST['cannelle'] == "on") {
                    echo ("<p>Avec du cannelle<p>");
                }
            }
            ?>
            <p>
                Prix final est <?php echo $price; ?>
            </p>
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Commander
            </button>
        </div>
    </div>
</div>
<!--<p>-->
<!--    --><?php
//    var_dump($_GET);
//    ?>
<!--    --><?php
//    var_dump($_POST);
//    ?>
<!--</p>-->
</body>

</html>