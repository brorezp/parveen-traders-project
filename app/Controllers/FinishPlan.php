<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class FinishPlan extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Finish Plan"
        ];
        return view('page/plan/finish-plan', $data);
    }
}
