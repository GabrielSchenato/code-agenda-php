<?php

namespace CodeAgenda\Http\Controllers;

use CodeAgenda\Pessoa;

class IndexController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    public function index($letra = "A") {
        $pessoas = Pessoa::where('apelido', 'like', $letra.'%')->get();
        return view('agenda', compact('pessoas'));
    }

}
