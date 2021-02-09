<?php
class Princesse extends Personnage {
    private $saved;

    public function __construct(){
        parent::__construct();
        $this->setNom('Amaurie');

        $this->x = 450;
        $this->y = 450;
    }

    public function setSaved($saved){
        $this->saved = false;
    }

    public function getSaved(){
        return $this->saved;
    }

}