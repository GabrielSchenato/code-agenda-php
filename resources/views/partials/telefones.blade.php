<p>
    <a href="#" class="label label-primary">Novo Telefone</a>
</p>
<table class="table table-hover">
    @foreach($telefones as $telefone)
        <tr>
            <td>{{ $telefone->descricao }}</td>
            <td>{{ $telefone->numero }}</td>
            <td>
                <a href="{{ route('telefone.destroy', ['id' => $telefone->id]) }}" class="text-danger" data-toggle="tooltip" data-placement="top" title="Apagar">
                    <i class="fas fa-minus-circle"></i>
                </a>
            </td>
            <td>{{ $telefone->descricao }}</td>
        </tr>
    @endforeach
</table>