<?php


namespace app\ImplementBuilderPattern;


class BLTBuilder extends SandwichBuilder
{

    public function buildBread(): void
    {
        $this->sandwich->setBread("White Bread");
    }

    public function buildCheese(): void
    {
        $this->sandwich->setCheese("Cheese");
    }

    public function buildVegetable(): void
    {
        $this->sandwich->setVegetable("Tomato");
    }

    public function buildMeat(): void
    {
        $this->sandwich->setMeat("Caw meat");
    }

    public function buildCondiments(): void
    {
        $this->sandwich->setCondiments("Add Condiments");
    }
}