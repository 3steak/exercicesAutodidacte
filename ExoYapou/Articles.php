<?php

class Article
{
    public $ref;
    public $name;
    public $price;
    public $quantity;

    public function __construct(string $ref, string $name, string $price, string $quantity)
    {
        // je sauvegarde mes variables 
        $this->ref = $ref;

        $this->name = $name;

        $this->price = $price;

        $this->quantity = $quantity;
    }
    public function ToString()
    {
        echo "<p>L'article " .  $this->ref . " qui se nomme " . $this->name . " coûte " . $this->price . " € et sa quantité est de " . $this->quantity . " disponible.</p>";
    }
}
