<?php
require_once __DIR__ . '/Models/productions.php';
require_once __DIR__ . '/db/store.php';
/*     class Production{

        //prprieta
        public $title;
        public $language;
        public $vote;

        public function __construct($title, $language, $vote){
            $this->title = $title;
            $this->language = $language;
            $this->vote = $vote;
        }

        public function render()
        {
            return " titolo:{$this -> title}  lingua:{$this -> language} voto: {$this -> vote}";
        }
        
    } */

/* $instanza1 = new Production('sfdasfa', 'en', '7.5');
$instanza2= new Production('sfdasfaasx', 'it', '5.5');
 */
/* echo $instanza1 -> render();
echo $instanza2 -> render(); */

foreach ($productions as $production) {
    /* echo "<h2>{$production->title}</h2>";
    echo "<h2>{$production->language}</h2>";
    echo "<h2>{$production->vote}</h2>"; */

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_OOP</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
    <div class="container d-flex">
        <h1>Lista Film</h1>
        <div class="section-film">
            <?php foreach ($productions as $production) : ?>
                <div class="card">
                    <h3>Tittolo: <?= $production->title ?></h3>
                    <h4>Lingua: <?= $production->language ?></h4>
                    <h4>Voto: <?= $production->vote ?></h4>

                </div>
            <?php endforeach; ?>
        </div>
       
    </div>

</body>
</html>