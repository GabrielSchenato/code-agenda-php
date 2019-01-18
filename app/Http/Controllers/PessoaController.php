<?php

namespace CodeAgenda\Http\Controllers;

use CodeAgenda\Pessoa;

class PessoaController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() 
    {
        //
    }

    public function delete($id) 
    {
        $pessoa = Pessoa::find($id);
        return view('pessoa.delete', compact('pessoa'));
    }
    
    public function destroy($id) 
    {
        Pessoa::destroy($id);
        return redirect()->route('agenda.index');
    }

}
