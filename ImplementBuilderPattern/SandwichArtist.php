<?php


namespace app\ImplementBuilderPattern;


class SandwichArtist
{
    private SandwichBuilder $sandwichBuilder;

    public function setSandwichBuilder(SandwichBuilder $sandwichBuilder)
    {
        $this->sandwichBuilder = $sandwichBuilder;
    }

    public function getSandwich():Sandwich{
        return $this->sandwichBuilder->getSandwich();
    }

    public function mackSandwich():void{
        $this->sandwichBuilder->mackSandwich();
        $this->sandwichBuilder->buildBread();
        $this->sandwichBuilder->buildCheese();
        $this->sandwichBuilder->buildCondiments();
        $this->sandwichBuilder->buildMeat();
        $this->sandwichBuilder->buildVegetable();
    }

}