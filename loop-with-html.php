<?php
    $w = 0;
    $studentName = [
        "student 1",
        "student 2",
        "student 3",
        "student 4",
        "student 5",
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php while($w <= 5): ?>
        <p>[while] Value is <?= $w ?></p>
        <?php $w++ ?>
    <?php endwhile ?>
    <?php for($i = 0; $i <= 5; $i++): ?>
        <p>[for] Value is <?= $i ?></p>
    <?php endfor ?>

    <?php for($i = 0; $i < count($studentName); $i++): ?>
        <p>name =  <?= $studentName[$i] ?></p>
    <?php endfor ?>
</body>
</html>