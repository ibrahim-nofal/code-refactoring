<?php
    require_once "../vendor/autoload.php";


    use app\CreationProblems\FootballPlayer;

    $football = FootballPlayer::createPR( 108 , 10);
    $football1 = FootballPlayer::createRT(200,300);
    var_dump($football);
    var_dump($football1);