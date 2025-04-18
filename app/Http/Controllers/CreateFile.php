<?php

namespace App\Http\Controllers;


class CreateFile extends Controller
{
    function __construct($data)
    {
        $words = array_slice($data, 1, 4);
        $filePath = storage_path('logs/file.txt');

        file_put_contents(
            $filePath,
            json_encode($words, JSON_UNESCAPED_UNICODE) . PHP_EOL,
            FILE_APPEND
        );
    }
}
