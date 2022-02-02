    <?php
     //importo array 
    include __DIR__ . '/db.php';
    //lo converto in json
    header('Content-Type: application/json');
    echo json_encode(['results' => $albums]);
    ?>