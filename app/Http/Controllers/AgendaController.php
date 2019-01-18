<?php

namespace CodeAgenda\Http\Controllers;

use CodeAgenda\Pessoa;

class IndexController extends Controller {

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
        $letras = $this->getLetras();
        return view('agenda', compact('pessoas', 'letras'));
    }
    
    public function busca(\Laravel\Lumen\Http\Request $request) 
    {
        $busca = $request->busca;
        $pessoas = [];
        if(!empty($busca)){
            $pessoas = Pessoa::where('nome', 'like', "%{$busca}%")
            ->orWhere('apelido', 'like', "%{$busca}%")
            ->get();
        }        
        $letras = $this->getLetras();
        return view('agenda', compact('pessoas', 'letras'));
    }

    /**
     * Método responsável por pegar somente as letras iniciais das pessoas cadastradas
     * no sistema para retornar para a view
     * 
     * @return array
     */
    protected function getLetras() 
    {
        $letras = [];
        foreach (Pessoa::all() as $pessoa) {
            $letras[] = strtoupper(substr($pessoa->apelido, 0, 1));
        }
        sort($letras);

        return array_unique($letras);
    }

}
