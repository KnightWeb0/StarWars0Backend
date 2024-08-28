<?php

namespace App\Http\Controllers;

use App\Models\Jedi;
use Illuminate\Http\Request;

class JediController extends Controller
{
    //


    //a place where all the jedi will be displayed

    public function index(){
        $jedis = Jedi::with('Padwan')->latest()->simplePaginate(10);

        return view('jedi.index', ['jedis' => $jedis ]);
    }



    //show the individual jedi
    public function show( Jedi $jedi){
      return view('jedi.show', ['jedi' => $jedi] );
    }

}
