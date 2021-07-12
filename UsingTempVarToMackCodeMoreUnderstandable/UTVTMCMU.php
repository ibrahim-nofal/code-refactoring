<?php

namespace app\UsingTempVarToMackCodeMoreUnderstandable;

class UTVTMCMU
{
    private String $name = "";
    private double $price = 0.0;
    private double $shippingCost = 0.0;
    private int $quantity = 0;

    /**
     * UTVTMCMU constructor.
     * @param string $name
     * @param float $price
     * @param float $shippingCost
     * @param int $quantity
     */
    public function __construct(string $name, float $price, float $shippingCost, int $quantity)
    {
        $this->name = $name;
        $this->price = $price;
        $this->shippingCost = $shippingCost;
        $this->quantity = $quantity;
    }


    public function getTotalCost():float{
        $quantityDiscount = 0.0;

        /***************** Good Code *********************/
        // some times temp var is better than directly function
        $over50Product = ($this->getQuantity() > 50) || ($this->getQuantity() * $this->getPrice() > 500);
        $over25Product = ($this->getQuantity() > 25) || ($this->getQuantity() * $this->getPrice() > 100);
        $over10Product = ($this->getQuantity() > 10) || ($this->getQuantity() * $this->getPrice() > 50);

        if($over50Product){
            $quantityDiscount = .10;
        }elseif($over25Product){
            $quantityDiscount = .07;
        }elseif($over10Product){
            $quantityDiscount = .05;
        }



        /*
                  *********************** Bad code **************************
        if(($this->getQuantity() > 50) || ($this->getQuantity() * $this->getPrice() > 500)){
            $quantityDiscount = .10;
        }elseif(($this->getQuantity() > 25) || ($this->getQuantity() * $this->getPrice() > 100)){
            $quantityDiscount = .07;
        }elseif(($this->getQuantity() > 10) || ($this->getQuantity() * $this->getPrice() > 50)){
            $quantityDiscount = .05;
        }
        */
        return ($this->quantity -1) * $quantityDiscount * $this->price;
    }

    //another example of using temporary var to mack the code more understandable ond relabel
    public function temp(){
        /*********************Bad Code**************************/
        echo "The total price is: " . ($this->getQuantity() * $this->getPrice() - $this->getShippingCost() - 20);



        //now to do this echo line more readable just assign this function in a temp var with a meaningful names
        $quantityPrice =  $this->getQuantity() * $this->getPrice();
        $quantityShippingCost = $quantityPrice - $this->getShippingCost();
        //the echo the line like that, so this is better than before
        echo "The total price is: " . ($quantityShippingCost  - 20);
    }


    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @return float
     */
    public function getShippingCost(): float
    {
        return $this->shippingCost;
    }

    /**
     * @return int
     */
    public function getQuantity(): int
    {
        return $this->quantity;
    }



}