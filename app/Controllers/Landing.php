<?php

namespace App\Controllers;

use App\Models\KantorBupatiModel;

class Landing extends BaseController
{
    public function index(): string
    {
        $model = new KantorBupatiModel();
        $data['kantor'] = $model->findAll();
        return view('landing/index', $data);
    }
}
