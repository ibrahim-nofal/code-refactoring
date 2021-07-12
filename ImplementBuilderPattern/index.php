<?php
    require_once "../vendor/autoload.php";

    use app\ImplementBuilderPattern\SandwichBuilder;
    use app\ImplementBuilderPattern\BLTBuilder;
    use app\ImplementBuilderPattern\SandwichArtist;


    $bual = new SandwichArtist();
    $blt = new BLTBuilder();
    $bual->setSandwichBuilder($blt);
    $bual->mackSandwich();
    echo  $bual->getSandwich();
