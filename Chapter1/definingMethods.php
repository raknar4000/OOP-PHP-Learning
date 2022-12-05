<?php

 class Basket 
 {

    public $itemsTotal;
    public $shippingCost;
    public $discount;

    // public method
    public function calculateSubTotal() {
        // this is this Basket
       $subTotal = $this->itemsTotal + $this->shippingCost - $this->discount ;
       
       return $subTotal;
    }


}
 
$basketObject = new Basket();

$basketObject->itemsTotal = 50;
$basketObject->shippingCost = 10;
$basketObject->discount = 30;

//calling a method using an object $basket

$subTotal = $basketObject->calculateSubTotal();

var_dump($subTotal);

