<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BreweryController extends Controller
{
    public function todas(){

        $breweries = DB::table('breweries')->get();
        
        return view("cervecerias", ["breweries"=>$breweries]);
    }

    public function una(){
        $cervezas = [
            [
                "nombre"=>"Heineken",
                "origin"=>"Holanda",
                "color"=>"amarillo, claro y brillante",
                "grados"=>"5",
                "foto"=>"https://birrapedia.com/img/modulos/cerveza/5fd/heineken-lager-beer_15417670066809_t.jpg",
            ],
            [
                "nombre"=>"Budweiser",
                "origin"=>"Estados Unidos",
                "color"=>"dorada palida",
                "grados"=>"5",
                "foto"=>"https://birrapedia.com/img/modulos/cerveza/7a9/budweiser_15136728722428_t.jpg",
            ],
            [
                "nombre"=>"San Miguel",
                "origin"=>"España",
                "color"=>"amarillo brillante",
                "grados"=>"5.4",
                "foto"=>"https://birrapedia.com/img/modulos/cerveza/75f/san-miguel-especial_15114329045921_t.jpg",
            ],
            [
                "nombre"=>"Quilmes",
                "origin"=>"Argentina",
                "color"=>"transparente dorada",
                "grados"=>"4.9",
                "foto"=>"https://birrapedia.com/img/modulos/cerveza/1c4/quilmes-clasica---cristal_1597946398392_t.jpg",
            ],
        ];

        return view("cerveceria", ["beers"=>$cervezas]);
    }


    public function create(Request $request){

        DB::table('breweries')->insert($request->except('_token'));

        return redirect()->route('home');
    }
}

