<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerTask2 extends Controller
{
    private $shoppingCart = [
        ['product' => 'Телефон', 'price' => 1200],
        ['product' => 'Наушники', 'price' => 800],
        ['product' => 'Ноутбук', 'price' => 1500],
        // Добавьте другие товары по вашему усмотрению
    ];
    private $totalprice;
    private $discout10 = 1;
    private $discout5 = 1;
    private $totalgoods;
    function read()
    {
        foreach ($this->shoppingCart as $product) {
            foreach ($product as $key => $value) {
                if ($key == 'price') {
                    if ($value > 1000) {
                        $this->discout10 = 0.9;
                    }
                    $this->totalprice += $value;
                    $this->totalgoods++;
                }
            }
            if ($this->totalgoods > 3) {
                $this->discout5 = 0.95;
            }
        }
        $this->totalprice = $this->totalprice * $this->discout10 * $this->discout5;
        return $this->totalprice;
    }
}
