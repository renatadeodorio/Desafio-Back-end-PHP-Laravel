<h2>Usuário: {{ $user->name }}</h2>
<br>
@foreach ($balance as $balances)

Saldo: {{$balances->balance}}

@endforeach
<br>
@if ($user->type==="Comum")
 <a href="{{ route('transfers.show', $user->id) }}">Transferir</a>
@endif
<button>Histórico de Transferência</button>







