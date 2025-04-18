<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class validate extends Controller
{
    protected $datas;
    protected $errors = [];

    function show($datas)
    {
        $this->datas = $datas;
        if (strlen($datas['name']) == 0) {
            $this->errors['name'] = "Имя слишком короткое!\n";
        };
        if (strlen($datas['name']) > 15) {
            $this->errors['name'] = "Имя слишком длинное!\n";
        };
        if (!(filter_var($datas['mail'], FILTER_VALIDATE_EMAIL))) {
            $this->errors['mail'] = "Проверьте email!\n";
        };
        if (strlen($datas['comment']) > 200) {
            $this->errors['comment'] = "Коментарий слишком длинный!\n";
        };

        return ($this->errors);
    }
}
