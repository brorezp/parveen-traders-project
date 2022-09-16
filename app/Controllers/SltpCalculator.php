<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\SltpModel;

class SltpCalculator extends BaseController
{
    protected $sltpModel;

    public function __construct()
    {
        $this->sltpModel = new SltpModel();
    }

    public function index()
    {
        $sltp = $this->sltpModel->findAll();

        $data = [
            "title" => "SL TP Calculator",
            "sltp" => $sltp
        ];



        return view('page/sltp/index', $data);
    }

    public function save()
    {
        $date = date("d-m-Y");
        $pair = $this->request->getVar('pair');
        $timeframe = $this->request->getVar('timeframe');
        $position = $this->request->getVar('position');
        $proximal = floatval($this->request->getVar('proximal'));
        $distal = floatval($this->request->getVar('distal'));
        
        $sub_pair = substr($pair,3);

        if ($position == 'BUY') {

            $price = $proximal + 0.0003;
            $stoploss = $distal - 0.0005;
            $point = $price + $stoploss;
            $tp_1 = $price + $point;
            $tp_2 = $price + ($point*2);
            $tp_3 = $price + ($point*3);

        } elseif ($position == 'SELL') {

            $price = $proximal;
            $stoploss = $distal + 0.0008;
            $point = $stoploss - $price;
            $tp_1 = $price - $point;
            $tp_2 = $price - ($point*2);
            $tp_3 = $price - ($point*3);

        } 

        if (substr($pair, 3) == 'JPY') {

            $last_number = 3;

        } elseif ($pair == 'GOLD') {

            $last_number = 2;

        } elseif (substr($pair, 3) != 'JPY') {

            $last_number = 4;

        }

        $this->sltpModel->save([
            
            'date' => $date,
            'pair' => $pair,
            'timeframe' => $timeframe,
            'position' => $position,
            'price' => round($price, $last_number),
            'stoploss' => round($stoploss, $last_number),
            'point' => round($point, $last_number),
            'tp-1' => round($tp_1, $last_number),
            'tp-2' => round($tp_2, $last_number),
            'tp-3' => round($tp_3, $last_number),

        ]);
    }

}
