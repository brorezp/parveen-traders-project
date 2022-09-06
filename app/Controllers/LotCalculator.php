<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LotCalculator extends BaseController
{
    public function index()
    {
        return view('pages/calculator/lot-calculator');
    }
}
