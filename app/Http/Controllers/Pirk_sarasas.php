<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pirk_sarasas extends Controller
{

    public function sarasas()
    {
        return view("sarasas");
    }
    public function rezultatas(Request $request)
    {
        $name = $request->input('pav');
        $amm = $request->input('kiekis');
        $price = $request->input('kaina');
        $total= $amm*$price;
        return view('rezultatas',['name' => $name,'amm' => $amm,
            'price' => $price,'total' => $total,]);
    }
    //public function add(Request $request)
    //{
        //$name = $request->input('pav');
       // $amm = $request->input('kiekis');
        //$price = $request->input('kaina');
    //}

}
