<?php

namespace CodeAgenda;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model {

    protected $table = 'telefones';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'descricao', 'codpais', 'ddd', 'prefixo', 'sufixo'
    ];
    
    public function pessoa()
    {
        return $this->belongsTo(Pessoa::class);
    }

    public function getNumeroAttribuite() 
    {
        return "{$this->codpais} ({$this->ddd}) {$this->prefixo} {$this->sufixo}";
    }

}
