<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Vaga;

use Auth;

class VagaController extends Controller {

    public function index(){
        $vagas = Vaga::get();
        
        return view('vagas.index', ['vagas' => $vagas]);
    }

    public function create() {
        return view('vagas.add');
    }

    public function store(Request $request){
        dd($request->all());
    }
}
