<h2>
    Usuário: {{ $user->name }} ({{ $user->type}})
    <br>
    <br>
    Saldo: R$ {{$balance[0]->balance}}
</h2>
<hr>

<strong>Ações: </strong>

@if ($user->type==="Comum")
    <a href="{{ route('transfers.show', $user->id) }}"><button>Transferir</button></a>
@endif

<a href="{{ route('transfers.historic', $user->id) }}"><button>Histórico de Transferência</button></a>
<a href="{{ route('welcome') }}"><button>Voltar</button></a>
