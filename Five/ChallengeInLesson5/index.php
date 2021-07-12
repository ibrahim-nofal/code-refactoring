<?php

    require_once "../../vendor/autoload.php";
    require_once 'Medals/Gold.php';
    use app\Five\ChallengeInLesson5\Medals\Gold;
    use app\Five\ChallengeInLesson5\Medals\Silver;
    use app\Five\ChallengeInLesson5\Medals\Bronze;
    use app\Five\ChallengeInLesson5\Athlete;
    use app\Five\ChallengeInLesson5\Medals\MedalsFactory;

    $athlete1 = new Athlete("Mohammed");
    $athlete2 = new Athlete("Ahmed");
    $athlete3 = new Athlete("Ali");

    $f = new MedalsFactory();

    $golds = $f->createMedal(Gold::class  , $athlete1);
    $golds2 = $f->createMedal(Gold::class  , $athlete1);

    var_dump($golds , $golds2);