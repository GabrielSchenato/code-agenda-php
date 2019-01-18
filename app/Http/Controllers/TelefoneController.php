<?php

namespace CodeAgenda\Http\Controllers;

use CodeAgenda\Telefone;

class TelefoneController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    public function destroy($id) {
        Telefone::destroy($id);
        return redirect()->route('agenda.index');
    }

}
