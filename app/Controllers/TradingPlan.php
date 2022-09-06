<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class TradingPlan extends BaseController
{
    public function getActivePlan()
    {
        $data = [
            "title" => "Active Plan"
        ];
        return view('page/plan/active-plan', $data);
    }

    public function getRunningTransaction()
    {
        $data = [
            "title" => "Running Transaction"
        ];
        return view('page/plan/running-transaction', $data);
    }

    public function getFinishPlan()
    {
        $data = [
            "title" => "Finish Plan"
        ];
        return view('page/plan/finish-plan', $data);
    }

    public function getCancelPlan()
    {
        $data = [
            "title" => "Cancel Plan"
        ];
        return view('page/plan/cancel-plan', $data);
    }
}
