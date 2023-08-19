<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data=[
            'title'=>'Selamat Datang di Sistem Pencarian Kosan '
        ];
        return view('Beranda',$data);
    }
}
