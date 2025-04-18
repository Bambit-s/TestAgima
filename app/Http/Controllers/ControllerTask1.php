<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\validate;
use App\Http\Controllers\CreateFile;

class ControllerTask1 extends Controller
{
    public function read()
    {
        return view('Task1');
    }

    public function validation()
    {
        $data = [];
        foreach ($_POST as $k => $v) {
            $data[$k] = $v;
        }

        $validation = new validate;
        $errors = $validation->show($data);
        if ($errors) {
            foreach ($errors as $error)
                return redirect()->route('Task1')->with('error', $error);
        } else {
            new CreateFile($data);
            return redirect()->route('home')->with('success', 'Спасибо за ваше сообщение!');
        }
    }
}
