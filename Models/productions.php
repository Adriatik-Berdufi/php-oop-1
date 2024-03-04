<?php 
    class Production{

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
        
    }
?>