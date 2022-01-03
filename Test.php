<?php

require 'Personnage.php';

// (name,HP,attack,defense,mana,Items)

$variable = new Personnage("Bloodreina",500,500,500,500,["shoes"]);
    var_dump($variable);


echo $variable->getHP();
echo $variable->getAttack();
echo $variable->getDefense();
echo $variable->getMana();