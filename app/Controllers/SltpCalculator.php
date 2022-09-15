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

        if ($position == 'buy' && $sub_pair == "USD") {
            $price = round($proximal,4) + 0.0003;
            $stoploss = round($distal,4) - 0.0005;
            $point = round($price + $stoploss, 4);
            $tp_1 = $price + $point;
            $tp_2 = $price + ($point*2);
            $tp_3 = $price + ($point*3);

        } elseif ($position == 'sell' && $sub_pair == "USD") {
            $price = round($proximal,4);
            $stoploss = round($distal,4) + 0.0008;
            $point = round($price - $stoploss, 4);
            $tp_1 = $price - $point;
            $tp_2 = $price - ($point*2);
            $tp_3 = $price - ($point*3);
        } 
        
        var_dump($price, $stoploss, $point, $tp_1);


        //$price = $this->request->getVar('price');
        //$stoploss = $this->request->getVar('stoploss');


        // $this->sltpModel->save([
        //     'pair' => $this->request->getVar('pair'),
        //     'position' => $this->request->getVar('position'),
        //     'proximal' => $this->request->getVar('proximal'),
        //     'distal' => $this->request->getVar('distal')

        // ]);
    }

}
