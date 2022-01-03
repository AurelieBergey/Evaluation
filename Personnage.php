<?php

Class Personnage{

    public $name;
    private $HP;
    private $attack;
    private $defense;
    private $mana;
    public $items;

    public function __construct($name ,$HP, $attack, $defense, $mana, $items ){

        $this->nane= $name;
        $this->HP= $HP;
        $this->attack= $attack;
        $this->defense= $defense;
        $this->mana= $mana;
        $this->items= $items;

    }
    public function getHP(){
        return $this->HP;
    }

    public function setHP ($para){
         $this->HP = ($para);
        
    }
    public function getAttack(){
        return $this->attack;
    }

    public function setAttack ($para){
         $this->attack = ($para);
        
    }
    public function getDefense(){
        return $this->defense;
    }

    public function setDefense ($para){
         $this->defense = ($para);
        
    }

    public function getMana(){
        return $this->mana;
    }

    public function setMana ($para){
         $this->mana = ($para);
        
    }

    public function Afficher_Stats(){

        echo "\n".$this->nane . "\n";
        echo $this->HP . "\n";
        echo $this->attack . "\n";
        echo $this->defense . "\n";
        echo $this->mana . "\n";
        echo $this->items . "\n";
    }
    public function Add_item ($str){
        $element = strtolower($str);
        array_push($this->items,$element) ;
    }


    public function Remove_item($str){
        $element = strtolower($str);
        array_splice($this->items, array_search($element,$this->items));
    }

    public function Search_item($str){
        if(array_key_exists($str,$this->items)){
            echo ("oui");
        }else{
            echo("non");
        }

    }

}

?>