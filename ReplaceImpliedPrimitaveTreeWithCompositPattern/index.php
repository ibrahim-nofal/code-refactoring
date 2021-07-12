<?php
    require_once "../vendor/autoload.php";

    use app\ReplaceImpliedPrimitaveTreeWithCompositPattern\Product;
    use app\ReplaceImpliedPrimitaveTreeWithCompositPattern\ProductGroup;


    $group1 = new ProductGroup([
        new Product("Tomato" , 1.99),
        new Product("Orange" , 0.99),
        new Product("Banana" , 0.35)
    ],
    "Vegetables");

    $group1->displayProductInfo();

    $group2 = new ProductGroup([
        new Product("Elephant" , 1.99),
        new Product("Lion" , 0.99),
        new Product("Dog" , 0.35)
    ],
        "Animal");

    $group2->displayProductInfo();