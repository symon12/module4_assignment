<?php

class Product {
    private $id;
    private $name;
    private $price;

    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }


    public function getFormattedPrice($price) {
        return '$' . number_format($price, 2);
    }

    public function showDetails() {
        echo "Product Details:\n";
        echo "- ID: {$this->id}\n";
        echo "- Name: {$this->name}\n";
        echo "- Price: {$this->getFormattedPrice($this->price)}\n";
    }
}

$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();