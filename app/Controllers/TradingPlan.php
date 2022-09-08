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

    public function activePlanSave()
    {
        $date = date("d-m-Y");
        $pair = $this->request->getVar('pair');
        $timeframe = $this->request->getVar('timeframe');
        $position = $this->request->getVar('position');
        $price = $this->request->getVar('price');
        $stoploss = $this->request->getVar('stoploss');
        $chart = $this->request->getVar('chart');
        
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



    public function activePlanDelete($id)
    {

        $this->activePlan->delete($id);
        var_dump('berhasil');
        // return redirect()->to('/active-plan');

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
