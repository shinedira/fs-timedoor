<?php
$first = $_GET['first'];
$second = $_GET['second'];

$penjumlahan = $first + $second;

echo "{$first} + {$second} = {$penjumlahan}";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="" method="get">
        <label for="username"></label>
        <input type="text" name="username" id="username">
        <br>
        <label for="password"></label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Login">
    </form> -->

    <form action="" method="get">
        <label for="first">First</label>
        <input type="text" name="first" id="first">
        <br>
        <label for="second">Second</label>
        <input type="text" name="second" id="second">

        <br>
        <input type="submit" value="Jumlahkan">
    </form>
</body>
</html>