<?php


namespace app\CompositAndBuilderPatternTogther;


class Item
{
    private array $itemInfoHM;
    private string $itemName;
    private array $children;

    /**
     * Item constructor.
     * @param string $itemName
     */
    public function __construct(string $itemName)
    {
        $this->itemName = $itemName;
        $this->itemInfoHM= [];
        $this->children = [];
    }


    /**
     * @return string
     */
    public function getItemName(): string
    {
        return $this->itemName;
    }

    /**
     * @param string $itemName
     */
    public function setItemName(string $itemName): void
    {
        $this->itemName = $itemName;
    }

    /**
     * @param Item $childName
     */
    public function add(Item $childName):void{
        array_push($this->children , $childName);
    }

    /**
     * @param string $info
     * @param string $infoName
     */
    public function addItemInformation(string $info , string $infoName):void{
        $this->itemInfoHM[$infoName] = $info;
    }

    /**
     * @param string $infoName
     * @return string
     */
    public function getItemInformation(string $infoName):string{
        return $this->itemInfoHM[$infoName];
    }

    /**
     * @return string
     */
    public function __toString():string
    {
        $itemInformation = $this->itemName . "\n";
        if(empty($this->itemInfoHM)){
            $itemInformation .= $this->displayProductInfo();
        }
        foreach($this->itemInfoHM as $item){
            $itemInformation .= $item->toString();
        }
        return $itemInformation;
    }

    public function displayProductInfo():string{
        $productInfo = '';
        foreach($this->itemInfoHM as $key => $value){
            $productInfo .= "{$key}: {$value} ";
        }
        return $productInfo;
    }

}