<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Product extends BaseController
{
    public function index()
    {
        return "Mango";
    }

    public function single()
    {
        return "Single Product page";
    }
}
