<?php
    require_once "../vendor/autoload.php";

    use app\HowToUseAdapterPattern\EnemyAdapter;
    use app\HowToUseAdapterPattern\GalaxPrime;

    $enemy = new EnemyAdapter(new GalaxPrime());

    $enemy->moveShip();
    $enemy->makeShipAttack();