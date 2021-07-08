<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->
<?php 
    include __DIR__ . "/classes/Movie.php"; 
    include __DIR__ . "/partials/text.php"; 

    $movies = [
        $movie1 = new Movie("Il Gladiatore", "2000", $text1, "https://pad.mymovies.it/filmclub/2001/01/022/locandina.jpg"), 
        $movie2 = new Movie("L'Ultimo Samurai", "2003", $text2, "https://lh3.googleusercontent.com/proxy/FUbX8gC5i3RJ8_lKEainhrXJddLk9CofbbG_nlcIujI3SdjTwlQRGXS34Gi6fVcfZAfxoTMbGRlxTQKLmWwTKwDi0rvTpHprYyJFt0h859ZXLsG2IWoyhTZ4PqltsRjqp1HGo_s"),  
        $movie3 = new Movie("L'ultimo dei Mohicani", "1992", $text3, "https://mr.comingsoon.it/imgdb/locandine/big/36517.jpg"), 
        $movie4 = new Movie("The Imitation Game", "2014", $text4, "https://www.raiplay.it/cropgd/1365x2048/dl/img/2019/10/18/1571411502764_1536x2048logo.jpg") 
    ]
    // $movie1 = new Movie("Il Gladiatore", "2000", $text1, "https://pad.mymovies.it/filmclub/2001/01/022/locandina.jpg"); 
    // $movie2 = new Movie("L'Ultimo Samurai", "2003", $text2, "https://lh3.googleusercontent.com/proxy/FUbX8gC5i3RJ8_lKEainhrXJddLk9CofbbG_nlcIujI3SdjTwlQRGXS34Gi6fVcfZAfxoTMbGRlxTQKLmWwTKwDi0rvTpHprYyJFt0h859ZXLsG2IWoyhTZ4PqltsRjqp1HGo_s"); 
    // $movie3 = new Movie("L'ultimo dei Mohicani", "1992", $text3, "https://mr.comingsoon.it/imgdb/locandine/big/36517.jpg"); 
    // $movie4 = new Movie("The Imitation Game", "2014", $text4, "https://www.raiplay.it/cropgd/1365x2048/dl/img/2019/10/18/1571411502764_1536x2048logo.jpg"); 

    //var_dump($movie1); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Movies</title>
</head>
<body>
    <main>
        <!-- SOLUZIONE CON I VARI DIV -->

        <!-- <div class="film">
            <img src='<?= $movie1->posterPath ?>' alt="">
            <div class="film_description">
                <h2><?= $movie1->title; ?></h2>
                <h5><?= $movie1->year; ?></h5>
                <p><?= $movie1->lessText(200); ?></p>
            </div>
        </div>
        <div class="film">
            <img src='<?= $movie2->posterPath ?>' alt="">
            <div class="film_description">
                <h2><?= $movie2->title; ?></h2>
                <h5><?= $movie2->year; ?></h5>
                <p><?= $movie2->lessText(200); ?></p>
            </div>
        </div>
        <div class="film">
            <img src='<?= $movie3->posterPath ?>' alt="">
            <div class="film_description">
                <h2><?= $movie3->title; ?></h2>
                <h5><?= $movie3->year; ?></h5>
                <p><?= $movie3->lessText(200); ?></p>
            </div>
        </div>
        <div class="film">
            <img src='<?= $movie4->posterPath ?>' alt="">
            <div class="film_description">
                <h2><?= $movie4->title; ?></h2>
                <h5><?= $movie4->year; ?></h5>
                <p><?= $movie4->lessText(200); ?></p>
            </div>
        </div> -->

        <!-- PROVA CON FOREACH -->

        <?php foreach($movies as $movie) {?>
            <div class="film">
                <img src='<?= $movie->posterPath ?>' alt="">
                <div class="film_description">
                    <h2><?= $movie->title; ?></h2>
                    <h5><?= $movie->year; ?></h5>
                    <p><?= $movie->lessText(200); ?></p>
                </div>
            </div>
        <?php } ?>
    
    </main>
</body>
</html>