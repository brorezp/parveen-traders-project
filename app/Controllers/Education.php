<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Education extends BaseController
{
    public function reviewTradingPlan()
    {
        return view('page/education/review-trading-plan');
    }
}
