@if (empty($historic) && empty($receveid_historic))
    <p>Não existe histórico.</p>
@endif

@foreach ($historic as $value)
    <p>{{$value}}</p>
@endforeach

@foreach ($receveid_historic as $value)
    <p>{{$value}}</p>
@endforeach

<a href="{{ route('transfers.index', $id) }}"><button>Voltar</button></a>
