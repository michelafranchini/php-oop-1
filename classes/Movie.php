<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
- è definita una classe ‘Movie’
   => all'interno della classe sono dichiarate delle variabili d'istanza
   => all'interno della classe è definito un costruttore
   => all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php 
    class Movie {
        // attributi
        public $title; 
        public $year; 
        public $posterPath;
        public $language;
        public $text;
        public $cast;

        // costruttore
        function __construct($title, $year, $text, $posterPath = "") {
            $this->title = $title; 
            $this->posterPath = $posterPath; 
            $this->language = $language; 
            $this->text = $text; 
            $this->cast = $cast;
            $this->year = $year;  
        }

        // metodo
        public function lessText($chars = 200) {
            return substr($this->text, 0 , $chars) . "..."; 
        }

    }


?>