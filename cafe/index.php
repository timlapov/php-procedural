<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Café</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <?php include("../block/navbar.php"); ?>
    <h1 class="text-center text-bg-secondary">Moi c'est une machine a café</h1>
    <h2 class="text-center text-bg-success">Choisissez une boisson</h2>
    <?php
    $boissons = [
        [
            "img" => "img/espresso.webp",
            "name" => "Espresso",
            "price" => "1,5 €"
        ],
        [
            "img" => "img/cappuccino.webp",
            "name" => "Cappuccino",
            "price" => "3,5 €"
        ],
        [
            "img" => "img/chocolat.webp",
            "name" => "Chocolat chaud",
            "price" => "4,0 €"
        ]
    ];
    ?>
    <div class="container">
        <div class="row text-center justify-content-center">
            <?php
            foreach ($boissons as $boisson) {
                echo ("
            <div class='card m-3' style='width: 18rem;'>
                <img src='{$boisson['img']}' class='card-img-top' alt='{$boisson['name']}'>
                <div class='card-body'>
                    <h5 class='card-title'>{$boisson['name']}</h5>
                    <p class='card-text'>{$boisson['price']}</p>
                    <a href='options.php?boisson={$boisson['name']}\&img={$boisson['img']}' class='btn btn-primary'>Acheter</a>
                </div>
            </div>
                ");
            };
            ?>
        </div>
    </div>
</body>

</html>