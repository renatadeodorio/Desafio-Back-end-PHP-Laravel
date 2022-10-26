<form action="{{route('transfers.concluded_transfer', $id)}}">
    Transferir para:
    <select name="user">
        @foreach ($users as $user)
            <option value='{{$user->id}}'>{{$user->name}}</option>
        @endforeach
    </select>
    <label for="amount"> Valor:</label>
    <input type="text" name="amount">
    <label for="password"> Senha:</label>
    <input type="password" name="password">
    <button type="submit">Enviar</button>
</form>
<a href="{{ route('transfers.index', $id) }}"><button>Voltar</button></a>
