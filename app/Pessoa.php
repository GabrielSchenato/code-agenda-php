<?php

namespace CodeAgenda;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model {

    protected $table = 'pessoas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'apelido', 'sexo',
    ];

    public function telefones() {
        return $this->hasMany(Telefone::class);
    }

}
