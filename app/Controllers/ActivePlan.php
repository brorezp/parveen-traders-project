<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ActivePlanModel;


class ActivePlan extends BaseController
{
    protected $activePlan;

    public function __construct()
    {
        $this->activePlan = new ActivePlanModel();
    }

    public function index()
    {
        $active = $this->activePlan->where('cancel', 'FALSE')->findAll();

        $data = [
            "title" => "SActive Plan",
            "sltp" => $active
        ];

        return view('page/plan/active-plan', $data);
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
            'chart' => $chart

        ]);

        return redirect()->to('/active-plan');
    }

    public function cancel($id)
    {
        $data = $this->activePlan->find($id);

         
        
        // $this->activePlan->delete($id);
        // var_dump($data['timeframe']);
        // return redirect()->to('/active-plan');
    }
}
