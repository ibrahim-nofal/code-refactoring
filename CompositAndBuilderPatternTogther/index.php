<?php

require_once "../vendor/autoload.php";

use app\CompositAndBuilderPatternTogther\ItemBuilder;

$product = new ItemBuilder("Parent");
$product->addChild("Product");
$product->addChild("Orange");
$product->addItemInformation("Prices" , "1.99");
$product->addItemInformation("Stock" , "100");

$product->displayAllInformation();

