<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Exercice – Images</title>
</head>

<body>
    <h1 class="text-center">
        Exercice – Images
    </h1>
    <?php
    $articles = [
        [
            "img" => "img/banana.png",
            "name" => "Banana",
            "price" => "5 €",
            "type" => "fruit"
        ],
        [
            "img" => "img/ours.png",
            "name" => "Ours peluche",
            "price" => "10 €",
            "type" => "jouet"
        ],
        [
            "img" => "img/robot.png",
            "name" => "Robot",
            "price" => "15 €",
            "type" => "jouet"
        ],
        [
            "img" => "img/php.png",
            "name" => "PHP",
            "price" => "0 €",
            "type" => "langage"
        ]
    ];
    //var_dump($articles);
    ?>
    <div>
        <div class="text-center container">
            <div class="row row-cols-2 justify-content-center w-25">
                <?php
                foreach ($articles as $article) {
                ?>
                <?php
                    echo (
                        "<div class='col'>
                        <img src='{$article["img"]}' class='img-fluid' alt='{$article["name"]}'>
                        <p>{$article["name"]}</p>
                        <p>{$article["price"]}</p>
                        <p>{$article["type"]}</p>
                        </div>
                    "
                    );
                };
                ?>
            </div>
        </div>
    </div>
</body>

</html>