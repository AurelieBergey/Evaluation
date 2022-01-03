<?php

require 'Personnage.php';

// (name,HP,attack,defense,mana,Items)

$variable = new Personnage("Bloodreina",500,500,500,500,["shoes"]);
    // var_dump($variable);


// echo $variable->getHP();
// echo $variable->getAttack();
// echo $variable->getDefense();
// echo $variable->getMana();

// $variable->Afficher_Stats();

$variable->Add_item("knife");
$variable->Add_item("hat");
$variable->Add_item("glasses");
var_dump($variable);

// $variable->Remove_item("hat");
// var_dump($variable);
// var_dump($variable);

// $variable->Search_item("hat");




