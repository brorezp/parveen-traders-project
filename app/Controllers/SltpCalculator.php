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
        // $this->sltpModel->save([
        //     'pair' => $this->request->getVar('pair'),
        //     'position' => $this->request->getVar('position'),
        //     'proximal' => $this->request->getVar('proximal'),
        //     'distal' => $this->request->getVar('distal')

        // ]);
    }

}
