<?php
    $heading = "Kebakaran selama 2 tahun di pabrik tahu";
    $paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                Quia nobis aperiam doloremque inventore incidunt totam magnam? Deserunt et quis quae.";

    $month = 'Agustus';
    $nilai = 2.5;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Berita Terkini</h1>

    <p><?php echo "hallo sekarang bulan {$month}" ?></p>
    <p><?php echo 'hallo sekarang bulan ' . $month ?></p>
    <?= "hallo sekarang bulan {$month}" ?>
    
    <div class="news">
        <h2><?= $heading ?></h2>
        <p><?= $paragraph ?></p>
    </div>
</body>
</html>
