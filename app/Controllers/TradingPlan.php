<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TradingPlan extends BaseController
{
    public function getActivePlan()
    {
        return view('page/plan/active-plan');
    }

    public function getRunningTransaction()
    {
        return view('page/plan/running-transaction');
    }

    public function getFinishPlan()
    {
        return view('page/plan/finish-plan');
    }

    public function getCancelPlan()
    {
        return view('page/plan/cancel-plan');
    }
}
