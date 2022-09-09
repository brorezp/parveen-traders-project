<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class CancelPlan extends BaseController
{
    public function index()
    {
        $data = [
            "title" => "Cancel Plan"
        ];
        return view('page/plan/cancel-plan', $data);
    }
}
