
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
 <header>
    <img
      src="https://www.freepnglogos.com/uploads/spotify-logo-png/spotify-icon-marilyn-scott-0.png"
      alt=""
    />
  </header>
<main>
    <?php
     //importo array 
    include __DIR__ . '/server/db.php';
    ?>
    <div class="album-container">
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
    </div>
</main>
<footer>
    &copy; copyright 2022
</footer>
</body>
</html>