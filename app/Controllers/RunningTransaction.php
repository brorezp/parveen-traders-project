<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\RunningTransactionModel;


class RunningTransaction extends BaseController
{
    protected $runningTransaction;

    public function __construct()
    {
        $this->runningTransaction = new RunningTransactionModel();
    }

    public function index()
    {
        $running = $this->runningTransaction->findAll();
        
        $data = [
            "title" => "Running Transactiosn",
            "rows" => $running
        ];
        return view('page/running/index', $data);
    }
}
