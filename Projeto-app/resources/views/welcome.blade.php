<h1>Usuários</h1>

<hr>
@foreach ($users as $user)
    <form action="{{url('transfers', ['user_id'=>$user->id])}}">
        <button type="submit">Entrar</button>
        - {{ $user->name }} ({{ $user->type }})
        <hr>
    </form>
@endforeach
