<?php


namespace app\ReplaceImpliedPrimitaveTreeWithCompositPattern;


class ProductGroup extends ProductComponent
{

    /**
     * @var $productComponents ProductComponent []
     */
    private array $productComponents;
    private string $productGroupName;

    /**
     * ProductGroup constructor.
     * @param ProductComponent[] $productComponents
     * @param string $productGroupName
     */
    public function __construct(array $productComponents, string $productGroupName)
    {
        $this->productComponents = $productComponents;
        $this->productGroupName = $productGroupName;
    }


    function displayProductInfo(): void
    {
        echo "----------- " . $this->getProductGroupName() . " -----------\n";
        foreach($this->productComponents as $component){
            $component->displayProductInfo();
        }
        echo "\n";
    }

    public function setProductGroupName(string $groupName){
        $this->productGroupName = $groupName;
    }
    public function getProductGroupName():string{
        return $this->productGroupName;
    }
    public function add(ProductComponent $newProduct): void
    {
        array_push($this->productComponents  , $newProduct);
    }

    public function remove(ProductComponent $oldProduct): void
    {
        if($key = array_search($oldProduct , $this->productComponents) != false){
            unset($this->productComponents[$key]);
        }
    }
}