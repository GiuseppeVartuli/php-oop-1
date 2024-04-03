<?php 

require_once __DIR__ . '/app/Models/Movie.php';
require_once __DIR__ . '/database/db.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    
    <div class="container">
        <div class="row">
    <?php foreach($movies as $movie)  : ?>       
            <div class="col">
                <div class="card">
                <h3><?= $movie->title ?></h3>
                <p><strong>Trama:</strong> <?= $movie-> overview ?></p>
                <p><strong>Cast:</strong></p>
                <?php foreach($movie->cast as $cast)  : ?>
                <ul>
                    <li><?= $cast ?></li>
                </ul>
                <?php endforeach; ?> 
                </div>
                </div>
                <div class="genere">
                    <?php foreach ($movie->genres as $genre ) : ?>
                        <p><strong>Genere:</strong> <?= $genre->name ?></p>
                        <?php endforeach; ?>
                </div>
            </div>
    <?php endforeach; ?>        
        </div>
    </div>
    

</body>
</html>