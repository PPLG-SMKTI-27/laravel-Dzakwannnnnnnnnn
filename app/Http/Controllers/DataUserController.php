<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataUserController extends Controller
{
    public function index()
    {
        $profil = [
            [
                'Ttl' => 'Samarinda, 1 Februari 2009',
                'Alamat' => 'Jl. Juanda 7 No.6A Rt.4',
                'Telepon' => '085822722058',
                'Email' => 'muhammaddzakwan035@gmail.com',
                'Pendidikan' => 'Universitas Indonesia',
            ]
        ];

        return view('home', compact('profil'));
    }
}
