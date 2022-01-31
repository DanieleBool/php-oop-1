<!-- 
Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
è definita una classe ‘Movie’
    - all'interno della classe sono dichiarate delle variabili d'istanza
    - all'interno della classe è definito un costruttore
    - all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà 
-->

<?php

class movie {
    public $title;
    public $director;
    public $year;

    public function __construct($_title, $_director, $_year)
    {
        $this->title = $_title;
        $this->director = $_director;
        $this->year = $_year;
    }

    public function data() {
        return 'TITOLO: ' . $this->title . ' - REGISTA: ' . $this->director . ' - ANNO: ' . $this->year;
    }
};

$movies = [
    $matrix = new movie("Matrix Resurrections", "Lana Wachowski", 2022),
    $spider = new movie("Spider-Man: No Way Home", "Jon Watts", 2021),
    $joker = new movie("Joker", "Todd Phillips", 2019),
    $batman = new movie("Il cavaliere oscuro", "Christopher Nolan", 2008),
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film</title>
</head>
<body>
    <h1>Lista dei film:</h1>
    <?php foreach($movies as $movie) { ?>
        <div>
            <?php
            echo "{$movie -> data()}"
            ?>
        </div>
    <?php } ?>
</body>
</html>