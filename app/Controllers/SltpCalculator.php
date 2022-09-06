<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class SltpCalculator extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "SL TP Calculator"
        ];
        return view('page/sltp/index', $data);
    }

    public function sltpCount()
    {
        $count = $this->request->getVar();
    }

}
