<?php

namespace App\Http\Controllers;
use App\Models\Brewery;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index ()
    {
        $breweries = Brewery::all();

        return view ('welcome',['breweries'=>$breweries]);
    }
}
