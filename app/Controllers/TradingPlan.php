<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ActivePlanModel;


class TradingPlan extends BaseController
{
    protected $activePlan;

    public function __construct()
    {
        $this->activePlan = new ActivePlanModel();
    }
    public function getActivePlan()
    {
        $active = $this->activePlan->findAll();

        $data = [
            "title" => "SActive Plan",
            "sltp" => $active
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
