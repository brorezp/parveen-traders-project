<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RunningTransactionModel;


class FinishPlan extends BaseController
{
    protected $runningTransaction;

    public function __construct()
    {
        $this->runningTransaction = new RunningTransactionModel();
    }

    public function index()
    {
        $running = $this->runningTransaction->where('finish', 'TRUE')->findAll();

        $data = [
            "title" => "Finish Plan",
            "rows" => $running
        ];

        return view('page/finish/index', $data);
    }
}
