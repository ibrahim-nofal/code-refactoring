<?php


namespace app\ImplementBuilderPattern;


abstract class SandwichBuilder
{
    protected Sandwich $sandwich;

    public function mackSandwich(){$this->sandwich = new Sandwich();}

    /**
     * @return Sandwich
     */
    public function getSandwich(): Sandwich
    {
        return $this->sandwich;
    }

    abstract public function buildBread():void;
    abstract public function buildCheese():void;
    abstract public function buildVegetable():void;
    abstract public function buildMeat():void;
    abstract public function buildCondiments():void;
}