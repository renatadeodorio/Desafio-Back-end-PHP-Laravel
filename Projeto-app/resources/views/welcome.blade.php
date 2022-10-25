Usuarios
@foreach ($users as $user)
    <form action="{{url('transfers', ['user_id'=>$user->id])}}">
        <p>{{ $user->name }} ({{ $user->type }})</p>
        <button class="btn btn-danger" type="submit">Entrar</button>
    </form>
@endforeach

