<?php


namespace app\EliminateDuplicationCodeWithTemplateMethod\Sandwich;


class Hamburger extends Sandwich
{

    public function addMeat(): void
    {
        echo "Hamburger was added\n";
    }

    public function addCondiments(): void
    {
        echo "Special sauce added\n";
    }
}