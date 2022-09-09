<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class RunningTransaction extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Running Transaction"
        ];
        return view('page/plan/running-transaction', $data);
    }
}
