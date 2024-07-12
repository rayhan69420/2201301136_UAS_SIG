<?php

namespace App\Controllers;

use App\Models\KantorBupatiModel;

class KantorBupati extends BaseController
{
    public function index()
    {
        $model = new KantorBupatiModel();
        $data['kantor'] = $model->findAll();
        return view('landing/data', $data);
    }

    public function detail($id)
    {
        $model = new KantorBupatiModel();
        $data['kantor'] = $model->find($id);
        return view('landing/detail2', $data);
    }
}
