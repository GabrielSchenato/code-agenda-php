<?php

namespace CodeAgenda\Http\Controllers;

use CodeAgenda\Telefone;

class TelefoneController extends Controller {

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
        $telefone = Telefone::find($id);
        $pessoa = $telefone->pessoa;
        return view('telefone.delete', compact('telefone', 'pessoa'));
    }
    
    public function destroy($id) 
    {
        Telefone::destroy($id);
        return redirect()->route('agenda.index');
    }

}
