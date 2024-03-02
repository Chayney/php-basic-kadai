<?php

class Food {
    private $name;
    private $price;

    public function show_price() {
        echo $this->price . '<br>';
    }

    public function __construct(string $name, int $price) {
        $this->name = $name;
        $this->price = $price;
    }
}

class Animal {
    private $name;
    private $height;
    private $weight;

     public function __construct(string $name,int $height,int $weight) {
         $this->name = $name;
         $this->height = $height;
         $this->weight = $weight;
     }

     public function show_height() {
        echo $this->height . '<br>';
     }
}

$vegitable = new Food('potato',250);

print_r($vegitable) ;
echo '<br>';



$dog = new Animal('dog',60,5000);



print_r($dog);
echo '<br>';

$vegitable->show_price();

$dog->show_height();