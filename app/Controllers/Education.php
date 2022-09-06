<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Education extends BaseController
{
    public function reviewTradingPlan()
    {
        $data = [
            "title" => "Review Trading Plan"
        ];
        return view('page/education/review-trading-plan', $data);
    }
}
