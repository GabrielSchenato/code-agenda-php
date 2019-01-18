<?php

namespace CodeAgenda\Http\Controllers;

use CodeAgenda\Pessoa;
use Illuminate\Http\Request;

class AgendaController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() 
    {
        //
    }

    public function index($letra = "A") 
    {
        $pessoas = Pessoa::where('apelido', 'like', $letra . '%')->get();
        return view('agenda', compact('pessoas', 'letras'));
    }
    
    public function busca(Request $request) 
    {
        $busca = $request->busca;
        $pessoas = [];
        if(!empty($busca)){
            $pessoas = Pessoa::where('nome', 'like', "%{$busca}%")
            ->orWhere('apelido', 'like', "%{$busca}%")
            ->get();
        }        
        return view('agenda', compact('pessoas', 'letras'));
    }

}
