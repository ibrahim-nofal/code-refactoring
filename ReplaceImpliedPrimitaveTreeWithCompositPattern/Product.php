<?php


namespace app\ReplaceImpliedPrimitaveTreeWithCompositPattern;


class Product extends ProductComponent
{

    private string $productName;
    private float $productPrice;

    /**
     * Product constructor.
     * @param string $productName
     * @param float $productPrice
     */
    public function __construct(string $productName, float $productPrice)
    {
        $this->productName = $productName;
        $this->productPrice = $productPrice;
    }


    function displayProductInfo(): void
    {
        echo $this->productName . ", ";
        echo $this->productPrice . "$\n";
    }
}