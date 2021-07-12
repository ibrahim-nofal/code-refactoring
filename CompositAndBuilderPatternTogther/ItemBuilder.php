<?php


namespace app\CompositAndBuilderPatternTogther;


class ItemBuilder
{
    /**
     * @var Item []
     */
    private array $item = [];
    private ?Item $root = null;
    private ?Item $current;
    private ?Item $parent;


    public function __construct(string $rootName)
    {
        $this->root = new Item($rootName);
        $this->addItemToArray($this->root);
        $this->current = $this->root;
        $this->parent = $this->root;
        $this->root->addItemInformation("Parent" , $this->parent->getItemName());

    }

    public function addItemInformation(string $name , string $value):void{
        $this->current->addItemInformation($name , $value);
    }
    public function addChild(string $child){
        $childNode = new Item($child);
        $this->addItemToArray($childNode);

        $this->current->add($childNode);
        $this->parent = $this->current;
        $this->current = $childNode;

        $childNode->addItemInformation("Parent" , $this->parent->getItemName());
    }

    public function addSiblings(string $siblings){
        $siblingsNode = new Item($siblings);
        $this->addItemToArray($siblingsNode);

        $this->parent->add($siblingsNode);
        $this->current = $siblingsNode;

        $siblingsNode->addItemInformation("Parent" , $this->parent->getItemName());
    }

    public function addItemToArray(Item $item){
        array_push($this->item , $item);
    }

    public function __toString():string
    {
        return $this->root->__toString();
    }

    public function displayAllInformation():void{
        foreach($this->item as $item){
            echo "{$item->getItemName()}: {$item->displayProductInfo()}\n";
        }
    }

    public function editThisItem(string $itemName):void{
        if($item = array_search($itemName , $this->item)){
            $this->current = $this->item[$item];
            $this->setItemParent($this->current->getItemInformation("Parent"));
        }
    }

    public function setItemParent(string $itemParen){
        if($item = array_search($itemParen , $this->item)){
            $this->parent = $this->item[$item];
        }
    }
}