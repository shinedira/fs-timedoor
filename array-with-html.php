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

    array_unshift($students, [
        "name"  => "Edwin",
        "score" => 10
    ]);

    array_pop($students);

    if(isset($_POST['name']) && isset($_POST['score'])){
        $name = $_POST['name'];
        $score = $_POST['score'];

        array_unshift($students, [
            "name"  => $name,
            "score" => $score
        ]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
            
            <label for="name">Name</label>
            <input type="text" name="name" id="name">
            <br>
            <label for="score">Score</label>
            <input type="text" name="score" id="score">
    
            <br>
            <input type="submit" value="Tambahkan">
    </form>
    <table border="1" style="margin-top: 10px;">
        <tr>
            <td>Name</td>
            <td>Score</td>
        </tr>

        <?php foreach($students as $student): ?>
            <tr >
                <td><?= $student['name'] ?></td>
                <td><?= $student['score'] ?></td>
            </tr>
        <?php endforeach ?>
    </table>

    <table border="1" style="margin-top: 10px;">
        <tr>
            <td>Name</td>
            <td>Score</td>
        </tr>

        <?php for($i=0; $i < count($students); $i++): ?>
            <tr >
                <td><?= $students[$i]['name'] ?></td>
                <td><?= $students[$i]['score'] ?></td>
            </tr>
        <?php endfor ?>
    </table>
</body>
</html>