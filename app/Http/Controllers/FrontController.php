<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index ()
    {
        $breweries = DB::table('breweries')->get();

        return view ('welcome',['breweries'=>$breweries]);
    }
}
