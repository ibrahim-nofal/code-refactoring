<?php


namespace app\ImplementBuilderPattern;


class Sandwich
{
    private string $bread = "";
    private string $vegetable = "";
    private string $meat = "";
    private string $cheese = "";
    private string $condiments = "";

    /**
     * @return string
     */
    public function getBread(): string
    {
        return $this->bread;
    }

    /**
     * @param string $bread
     */
    public function setBread(string $bread): void
    {
        $this->bread = $bread;
    }

    /**
     * @return string
     */
    public function getVegetable(): string
    {
        return $this->vegetable;
    }

    /**
     * @param string $vegetable
     */
    public function setVegetable(string $vegetable): void
    {
        $this->vegetable = $vegetable;
    }

    /**
     * @return string
     */
    public function getMeat(): string
    {
        return $this->meat;
    }

    /**
     * @param string $meat
     */
    public function setMeat(string $meat): void
    {
        $this->meat = $meat;
    }

    /**
     * @return string
     */
    public function getCheese(): string
    {
        return $this->cheese;
    }

    /**
     * @param string $cheese
     */
    public function setCheese(string $cheese): void
    {
        $this->cheese = $cheese;
    }

    /**
     * @return string
     */
    public function getCondiments(): string
    {
        return $this->condiments;
    }

    /**
     * @param string $condiments
     */
    public function setCondiments(string $condiments): void
    {
        $this->condiments = $condiments;
    }

    public function __toString():string{
        return
            $this->getBread()
            . " " .
            $this->getVegetable()
            . " " .
            $this->getCheese()
            . " " .
            $this->getMeat()
            . " " .
            $this->getCondiments();
    }

}
