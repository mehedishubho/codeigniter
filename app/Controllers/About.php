<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class About extends BaseController
{
    public function index(): string
    {
        return view('about_us');
    }
}
