
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php
     //importo array 
    include __DIR__ . '/server/db.php';
    ?>
        <?php foreach ($albums as $album) { ?>
            <div class="album-box">
                <div class="album-cover">
                    <img src="<?= $album['poster'] ?>" :alt="title" />
                </div>
                <div class="album-details">
                    <h2><?= $album['title'] ?></h2>
                    <h3><?= $album['author'] ?></h3>
                    <h4><?= $album['year'] ?></h4>
                </div>
            </div>
       <?php } ?>
    

    <template>
  
</template>
</body>
</html>