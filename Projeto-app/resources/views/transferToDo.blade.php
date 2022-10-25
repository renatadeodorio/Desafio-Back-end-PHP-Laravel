<form action="{{route('transfered.store')}}" method="post" name="Tranferir">
@method('POST')
@csrf
<input type="hidden" value="{{$id}}" name="id"></
<hr>
 Usuário:
<select name="user">
@foreach ($users as $user)
  <option value='{{$user->id}}'>{{$user->name}}</option>
@endforeach
</select>
<br>
<label for="amount">Valor:</label>
<input type="text" name="balance" id="amount"/><br><br>
<button>Enviar</button>
<br><br><br><br>
<hr>
</form>
