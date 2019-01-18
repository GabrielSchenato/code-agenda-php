<?php

namespace CodeAgenda\Providers;

use CodeAgenda\Pessoa;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
        view()->share(['letras' => $this->getLetras()]);
    }


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
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
