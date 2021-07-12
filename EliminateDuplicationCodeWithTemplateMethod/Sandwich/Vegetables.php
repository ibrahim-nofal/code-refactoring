<?php


namespace app\EliminateDuplicationCodeWithTemplateMethod\Sandwich;


class Vegetables extends Sandwich
{

    public function customerWantsMeat():bool{
        return false;
    }
    public function addMeat(): void
    {
        // TODO: Implement addMeat() method.
    }

    public function addCondiments(): void
    {
        echo "Condiments was added\n";
    }
}