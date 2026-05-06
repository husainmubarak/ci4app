<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Husain Al Mubarak',
        ];
        return view('pages/home', $data);
    }

    public function about() 
    {
        $data = [
            'title' => 'About Me | Husain Al Mubarak',
        ];
        return view('pages/about', $data);
    }   

    public function contact() 
    {
        $data = [
            'title' => 'Contact Me | Husain Al Mubarak',
            'alamant' => [
                [
                    'tipe' => 'Rumah',
                    'alamat' => 'Jl. Cindai Alus No. 35',
                    'kota' => 'Martapura'
                ],
                [
                    'tipe' => 'Kantor',
                    'alamat' => 'Jl. Panglima Batur No. 10',
                    'kota' => 'Banjarbaru'
                ]
            ]
        ];
        return view('pages/contact', $data);
    }
}
