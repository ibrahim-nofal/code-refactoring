<?php


namespace app\EliminateDuplicationCodeWithTemplateMethod\Sandwich;


abstract class Sandwich
{
    public final function mackSandwich(){
        echo "\n----------New Order---------------\n";

        $this->cutBun();

        if($this->customerWantsMeat()){
            $this->addMeat();
        }
        
        $this->addVegetables();

        if($this->customerWantsCondiments()){
            $this->addCondiments();
        }
        $this->wrapSandwich();
    }

    public function cutBun()
    {
        echo "Bun is cut\n";
    }

    public function customerWantsMeat():bool
    {
        return true;
    }

    public abstract function addMeat():void;
    public abstract function addCondiments():void;
    private function addVegetables()
    {
        echo "Vegetables was added\n";
    }

    public function customerWantsCondiments(): bool
    {
        return true;
    }



    public function wrapSandwich()
    {
        echo "Sandwich was wrapped\n";
    }
}