<?php

namespace App\Http\Controllers;

use App\Http\Requests\PadronRequest;
use App\Models\Padron;
use Illuminate\Http\Request;

class PadronController extends Controller
{
    public function index(){

        return view('padron.index');

    }

    public function query(PadronRequest $request){

        $padron = Padron::where('MATRICULA','=',$request->dni)->where('GENERO','=',$request->genero)->first();        

        return view('padron.detail',['padron' =>$padron]);
    }
}
