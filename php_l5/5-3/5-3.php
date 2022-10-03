<?php
require_once ("Cart.php");
$product = new Product(1,"product_0", 2.50);
$product_2 = new Product(2,"product_1", 2);
$cart = new Cart();

$cart->addItem($product, 2);
$cart->addItem($product_2, 2);

echo "\nAmount: " . $cart->getAmount() ."\n";
echo "\nShow cart\n";
var_dump($cart ->getItems());