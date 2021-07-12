<?php

require_once "../vendor/autoload.php";

    use app\AvoidDuplicationByChainConstructors\FootballPlayer;

    $football = new FootballPlayer(10,39,10,20 , 400);
    $football2 = $football::construct2(10,29,39,49 );
    $football3 = $football::construct3(10,29,39,49 );

    var_dump($football , $football2 , $football3);