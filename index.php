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
    echo $production->render();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP_OOP</title>
</head>
<body>



    
</body>
</html>