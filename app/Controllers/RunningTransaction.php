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

    public function edit($id)
    {
        
        $running = $this->runningTransaction->find($id);

        $data = [
            "title" => "Add Take Profit",
            "row" => $running
        ];

        return view('page/running/edit', $data);
    }

    public function update()
    {
        $this->runningTransaction->save([
            'id' => $this->request->getVar('id'),
            'tp-1' => $this->request->getVar('tp-1'),
            'tp-2' => $this->request->getVar('tp-2'),
            'tp-3' => $this->request->getVar('tp-3'),
            'hit-1' => $this->request->getVar('hit-1'),
            'hit-2' => $this->request->getVar('hit-2'),
            'hit-3' => $this->request->getVar('hit-3'),
        ]);

        return redirect()->to('/running-transaction');
    }
}
