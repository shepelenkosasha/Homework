<?php session_start(); ?>

<!DOCTYPE html>
<html>
    <head>
        <title>index</title>
        <meta charset="utf-8">
    </head>
    <body>
        <form method="get">
            <input type="text" name="username" placeholder="Please, enter your name">
            <button type="submit"><b>CLICK ME</b></button>
        </form>
    </body>
</html>

<?php

if (!empty($_GET['username'])){
    $_SESSION['username'] = $_GET['username'];
}
echo '<br>';
echo '<a href="/site/hello.php">hello</a>';