<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Contact extends BaseController
{
    public function index(): string
    {
        return view('contact');
    }
}
