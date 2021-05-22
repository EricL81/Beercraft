<?php

namespace App\Http\Controllers;
 
use App\Models\Beer;
use App\Models\Brewery;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class BreweryController extends Controller
{
    public function __construct()
    {
        View::share('beers', Beer::all());
    }
    
    public function all()
    {
        // recuperar las cervecerias del db 
        $breweries = Brewery::all();
        // pasarlas a la vista
        return view ('breweries',['breweries'=>$breweries]);

        }

    public function one($id)
    {
        $brewery = Brewery::findOrFail($id);

        return view ('brewery',['brewery'=>$brewery]);
    }

/*     public function beer(){
        $beer = [
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

        return view("cerveza", ["beers"=>$beer]);
    } */



    public function create(Request $request)
    {
        $request = $request->validate([
            'name' => 'filled',
            'capacity' => 'required',
            'description' => 'required',
            'beers'=>'required'
        ]);
        
        $user = Auth::user();
        
        if (!$user)
            return back()->with("message","No estás autenticado");

        $brewery = $user->breweries()->create($request);
        $brewery->beers()->attach($request['beers']);

        return redirect()->back()->with("message","Cerveceria creada con exito");
    }

    public function update(Request $request,$id)
    {
        $request = $request->validate([
            'name' => 'required',
            'capacity' => 'required',
            'description' => 'required',
            'beers'=>'required'
        ]);

        // si estoy autenticado y si soy el dueno

        $user = Auth::user();

        if (!$user)
            return back()->with("message","No estás autenticado");

        $brewery = Brewery::findOrFail($id);

        if($user->id != $brewery->user_id)
            return back()->with("message","No estás autorizado");
        
        $brewery->name = $request['name'];
        $brewery->capacity = $request['capacity'];
        $brewery->description = $request['description'];
        $brewery->beers()->sync($request['beers']); 


        $brewery->save();

        return back()->with("message","Cerveceria modificada con exito");
    }

    public function delete($id)
    {
        $user = Auth::user();

        if (!$user)
            return back();

        $brewery = Brewery::findOrFail($id);

        if($user->id != $brewery->user_id)
            return back();

        $brewery->delete();

        return redirect()->route("cervecerias");
    }

    public function beer()
    {
        $beers = Beer::all();
        return view('cerveza', compact($beers));
    }


}
