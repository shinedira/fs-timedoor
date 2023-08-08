<?php
    $students = [
        [
            "name"  => "student 1",
            "score" => 50
        ],
        [
            "name"  => "student 2",
            "score" => 80
        ],
        [
            "name"  => "student 3",
            "score" => 65
        ],
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop Array</title>
</head>
<body>
    <?php for($i = 0; $i < count($students); $i++): ?>
        <p>Student With index [<?= $i ?>] is =  <?= $students[$i] ?></p>
    <?php endfor ?>
</body>
</html>