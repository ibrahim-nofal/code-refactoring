<?php


namespace app\ReplaceImpliedPrimitaveTreeWithCompositPattern;


abstract class ProductComponent
{
    public function add(ProductComponent $newProduct):void{}
    public function remove(ProductComponent $oldProduct):void{}
    public function getProductComponent(int $componentIndex):?ProductComponent{
        return null;
    }
    public function getProductName():?string{
        return null;
    }
    abstract function displayProductInfo():void;
}