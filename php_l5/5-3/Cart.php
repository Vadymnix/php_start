<?php
require_once ("Product.php");

class Cart {
    private array $cartItems = [];

    public function addItem(Product $product, int $count) {
        $flag = false;
        if(count($this->cartItems)) {
            foreach ($this->cartItems as $key => $currentCount) {
                if( $key === $product->getId()) {
                    $flag = true;
                    $this->cartItems[$key][1] += $count;
                }
            }
        }

        if(!$flag) {
            $this->cartItems[$product->getId()] = [$product,$count];
        }
    }

    public function getItems():?array {
        return $this->cartItems;
    }

    public function getAmount():float {
        $sum = 0;
        if(count($this->cartItems)) {
            foreach ($this->cartItems as $item) {
                $sum += $item[0]->getPrice() * $item[1];
            }
        }
        return  $sum;
    }
}