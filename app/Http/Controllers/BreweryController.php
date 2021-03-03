<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BreweryController extends Controller
{
    public function todas(){
        $cervecerias = [
            [
            "nombre"=>"Electric Bcn, España",
            "desc"=>"En Electric Bcn, Alessandra y Celeste comparten la pasión para la comida y el buen beber. Celeste es la parte cervecera y Alessandra siempre está buscando las mejores referencias en el mundo de los vinos italianos.",
            "aforo"=>20,
            "foto"=>"https://birrapedia.com/img/modulos/empresas/751/electric-bcn_16137200947188_p.jpg",
            ], 
            [
            "nombre"=>"Two Brooks, Inglaterra",
            "desc"=>"Alcoholic Sparkling Water, made of just 3 ingredients: alcohol, sparkling water & natural fruit flavouring. That’s it.",
            "aforo"=>43,
            "foto"=>"https://birrapedia.com/img/modulos/empresas/5c9/two-brooks_16046580606446_p.jpg",   
            ], 
            [
            "nombre"=>"Dos Dingos, Argentina",
            "desc"=>"Dos Argentinos introducidos en Australia por casi una década, Los Dingos se adaptaron al continente, convirtiéndose en parte del mismo, se inspiraron con sus sabores, aromas, ingredientes y gente y volvieron a su tierra natal a inspirar y predicar Pasión por el Disfrute a travez de la cerveza.",
            "aforo"=>17,
            "foto"=>"https://birrapedia.com/img/modulos/empresas/49d/dos-dingos_16015468557751_p.jpg",
            ], 
            [
            "nombre"=>"Hopa Beer Denda, España",
            "desc"=>"Tienda de Cerveza Artesana en Donostia - San Sebastián. Encuentra el mayor catálogo de cervezas artesanas km 0, nacionales y de importación. Ponemos a tu servicio nuestra pasión y experiencia para ayudarte a elegir la cerveza que mejor se adapta a ti.",
            "aforo"=>26,
            "foto"=>"https://birrapedia.com/img/modulos/empresas/3ca/hopa-beer-denda_15994851698264_p.jpg",
            ],
        ];
        return view("cervecerias", ["breweries"=>$cervecerias]);
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
}
