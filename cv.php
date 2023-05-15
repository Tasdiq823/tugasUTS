<?php

namespace App\Controllers;

class Cv extends BaseController
{
    public function index()


    {
        $data = [
            'alamat' => 'CV Pribadi'
        ];
        return view('tugas/cv', $data);
    }
}
