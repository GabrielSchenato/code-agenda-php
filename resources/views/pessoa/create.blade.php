@extends('layout')

@section('content')

<div class="col-md-6">
    <form class="form-horizontal" action="{{ route('pessoa.store') }}" method="post">
        <div class="form-group">
            <label for="nome" class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
                <input type="text" name="nome" id="nome" class="form-control" placeholder="Nome Completo">
            </div>
        </div>
        <div class="form-group">
            <label for="apelido" class="col-sm-2 control-label">Apelido</label>
            <div class="col-sm-10">
                <input type="text" name="apelido" id="apelido" class="form-control" placeholder="Apelido">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <div class="radio">
                    <label>
                        <input type="radio" name="sexo" value="F"> <i class="fas fa-female"></i><br/>
                        <input type="radio" name="sexo" value="M"> <i class="fas fa-male"></i>
                    </label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-primary">Salvar</button>
            </div>
        </div>
    </form>
</div>

@endsection