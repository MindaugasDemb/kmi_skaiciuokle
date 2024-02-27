<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Skaiciuokle extends Controller
{

    public function skaiciuokle()
    {
        return view("skaiciuokle");
    }
    public function rezultatas(Request $request)
    {
        $ugis = $request->input('ugis');
        $svoris = $request->input('svoris');
        $kmi= $svoris/(($ugis/100)*($ugis/100));
        return view('rezultatas',['kmi' => $kmi]);
    }
    //public function add(Request $request)
    //{
    //$name = $request->input('pav');
    // $amm = $request->input('kiekis');
    //$price = $request->input('kaina');
    //}

}
