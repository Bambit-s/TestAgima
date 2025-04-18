<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Book;

class ControllerTask3 extends Controller
{
    private $Title = ['W', 'A', 'S', 'D'];
    private $Author = ['Z', 'X', 'C', 'V'];
    private $Year = [2000, 1990, 2010, 2020];
    private $Price = [10000, 20000, 30000, 40000];
    public $i;
    public function read()
    {
        for ($i = 0; $i < 4; $i++) {
            $k = new Book($this->Title[$i], $this->Author[$i], $this->Year[$i], $this->Price[$i]);
            echo ("<pre>");
            $k->getInfo();
            echo ("</pre>");
        }
    }
}
