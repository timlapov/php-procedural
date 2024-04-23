<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<?php
include("block/navbar.php");
?>
<h1 class="text-center p-4">LOGIN.PHP</h1>
<p>
    <?php
    //var_dump($_GET);
    $username = "Timothee";
    $password = "Lapov";
    if (isset($_GET['username'])) {
        $user = $_GET['username'];
    } else {
        $user = "";
    }
    if (isset($_GET['password'])) {
        $passwd = $_GET['password'];
    } else {
        $passwd = "";
    }
    ?>
</p>
<?php
if ($username === $user && $password === $passwd) {
    session_start();
    echo "<p class='text-danger'>Bonjour, {$username}. You are logged in.</p>";
} else {
    echo "<p>You are not logged in.</p>";
}
?>
<div class="container">
    <form method="GET" action="login.php">|
        <label for="username">Username</label>
        <input type="text" name="username" id="username">
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <input type="submit" value="Valider">
    </form>
    <?php
    if (isset($_SESSION['username'])) {
        include_once("logoutForm.php");
    }

    ?>
    <?php
    if( !isset($_SESSION)){
        session_start();
    }

    if( isset($_SESSION["username"])){
        include_once("logoutForm.php");
    }
    ?>
</div>
</body>
</html>