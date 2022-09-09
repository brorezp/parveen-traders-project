<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ActivePlanModel;


class CancelPlan extends BaseController
{
    protected $activePlan;

    public function __construct()
    {
        $this->activePlan = new ActivePlanModel();
    }

    public function index()
    {
        $active = $this->activePlan->where('cancel', 'TRUE')->findAll();

        $data = [
            "title" => "Cancel Plan",
            "rows" => $active
        ];

        return view('page/plan/cancel-plan', $data);
    }
}
