<?php

namespace CodeAgenda\Http\Controllers;

use CodeAgenda\Pessoa;

class PessoaController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    public function destroy($id) {
        Pessoa::destroy($id);
        return redirect()->route('agenda.index');
    }

}
