<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ActivePlanModel;
use App\Models\RunningTransactionModel;


class ActivePlan extends BaseController
{
    protected $activePlan;
    protected $runningTransaction;

    public function __construct()
    {
        $this->activePlan = new ActivePlanModel();
        $this->runningTransaction = new RunningTransactionModel();
    }


    public function index()
    {
        $active = $this->activePlan->where('cancel', 'FALSE')->findAll();

        $data = [
            "title" => "SActive Plan",
            "rows" => $active
        ];

        return view('page/active/index', $data);
    }

    public function save()
    {
        $date = date("d-m-Y");
        $pair = $this->request->getVar('pair');
        $timeframe = $this->request->getVar('timeframe');
        $position = $this->request->getVar('position');
        $price = $this->request->getVar('price');
        $stoploss = $this->request->getVar('stoploss');
        $chart = $this->request->getVar('chart');
        $cancel = 'FALSE';
        
        // var_dump($date);
        
        if ($position == "BUY") {

            $point = $price - $stoploss;
            $tp_1 = $price + $point;
            $tp_2 = $price + ($point*2);
            $tp_3 = $price + ($point*3);

        } elseif ($position == "SELL") {

            $point = $stoploss - $price;
            $tp_1 = $price - $point;
            $tp_2 = $price - ($point*2);
            $tp_3 = $price - ($point*3);
        }

        $this->activePlan->save([
            'date' => $date,
            'pair' => $pair,
            'timeframe' => $timeframe,
            'position' => $position,
            'price' => $price,
            'stoploss' => $stoploss,
            'point' => $point,
            'tp-1' => $tp_1,
            'tp-2' => $tp_2,
            'tp-3' => $tp_3,
            'chart' => $chart,
            'cancel' => $cancel

        ]);

        return redirect()->to('/active-plan');
    }

    public function cancel($id)
    {
        $data = $this->activePlan->find($id);

        $this->activePlan->save([
            'id' => $id,
            'cancel' => 'TRUE'
        ]);

        return redirect()->to('/active-plan');
    }

    public function addRunning($id)
    {
        $data = $this->activePlan->find($id);

        $this->runningTransaction->save([
            'date' => $data['date'],
            'pair' => $data['pair'],
            'timeframe' => $data['timeframe'],
            'position' => $data['position'],
            'price' => $data['price'],
            'stoploss' => $data['stoploss'],
            'point' => $data['point'],
            'chart' => $data['chart'],
            'tp-1' => '',
            'tp-2' => '',
            'tp-3' => '',
            'finish' => 'FALSE',
        ]);

        $this->activePlan->delete($id);

        return redirect()->to('/active-plan');
    }

    public function edit($id)
    {
        
        $active = $this->activePlan->find($id);

        $allpair = [
            'EURUSD', 'GBPUSD', 'USDJPY', 'GBPJPY', 'AUDUSD', 
            'EURJPY', 'USDCAD', 'USDCHF', 'AUDJPY', 'NZDUSD', 
            'EURGBP', 'CADJPY', 'EURAUD', 'GBPAUD', 'AUDCAD', 
            'EURCAD', 'CHFJPY', 'EURCHF', 'NZDJPY', 'GBPCAD', 
            'GBPCHF', 'AUDCHF', 'AUDNZD', 'EURNZD', 'GBPNZD', 
            'XAUUSD'

        ];

        $data = [
            "title" => "Edit Plan",
            "row" => $active,
            "allpair" => $allpair,
        ];

        return view('page/active/edit', $data);
    }

    public function update()
    {
        $id = $this->request->getVar('id');
        $date = date("d-m-Y");
        $pair = $this->request->getVar('pair');
        $timeframe = $this->request->getVar('timeframe');
        $position = $this->request->getVar('position');
        $price = $this->request->getVar('price');
        $stoploss = $this->request->getVar('stoploss');
        $chart = $this->request->getVar('chart');
        $cancel = 'FALSE';
        
        // var_dump($date);
        
        if ($position == "BUY") {

            $point = $price - $stoploss;
            $tp_1 = $price + $point;
            $tp_2 = $price + ($point*2);
            $tp_3 = $price + ($point*3);

        } elseif ($position == "SELL") {

            $point = $stoploss - $price;
            $tp_1 = $price - $point;
            $tp_2 = $price - ($point*2);
            $tp_3 = $price - ($point*3);
        }

        $this->activePlan->save([
            'id' => $id,
            'date' => $date,
            'pair' => $pair,
            'timeframe' => $timeframe,
            'position' => $position,
            'price' => $price,
            'stoploss' => $stoploss,
            'point' => $point,
            'tp-1' => $tp_1,
            'tp-2' => $tp_2,
            'tp-3' => $tp_3,
            'chart' => $chart,
            'cancel' => $cancel

        ]);

        return redirect()->to('/active-plan');
    }

}
