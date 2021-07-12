<?php
    require_once "../vendor/autoload.php";

    use app\EliminateDuplicationCodeWithTemplateMethod\Sandwich\Hamburger;
    use app\EliminateDuplicationCodeWithTemplateMethod\Sandwich\Vegetables;


    $ham = new Hamburger();

    $ham->mackSandwich();

    $veg = new Vegetables();

    $veg->mackSandwich();