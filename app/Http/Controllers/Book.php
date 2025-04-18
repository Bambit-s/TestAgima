<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Book extends Controller
{
    private $title;
    private $author;
    private $year;
    private $price;
    private $data;
    private $str;
    public function __construct($title, $author, $year, $price)
    {
        // $this->data =
        //     [
        //         'Название:' => $this->title = $title,
        //         'Автор:' => $this->author = $author,
        //         'Год выпуска:' => $this->year = $year,
        //         'Цена:' => $this->price = $price
        //     ]; 

        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->price = $price;
        $this->str = 'Название: ' . $this->title . ', Автор: ' . $this->author . ', Год выпуска: ' . $this->year . ', Цена: ' . $this->price;
    }

    public function getInfo()
    {
        // dump($this->data);
        echo $this->str;
    }
}
