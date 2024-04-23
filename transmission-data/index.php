<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<?php
include("block/navbar.php");
?>
<h1 class="text-center p-4">INDEX.PHP</h1>
<h2 class="text-center">To get</h2>
<form method="GET" action="get.php">
    <input name="data" type="text">
    <input type="submit">
</form>
<h2 class="text-center">To post</h2>
<form method="POST" action="post.php">
    <input name="data" type="text">
    <input type="submit">
</form>

<form method="POST" action="cookies.php">
    <input class="btn btn-danger m-5" type="submit" value="Sauvegarder des cookies">
</form>
<?php
var_dump($_COOKIE);
?>
</body>

</html>