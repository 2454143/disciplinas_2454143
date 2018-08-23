<ul>
@foreach ($disciplinas as $disciplina)
        <li>{{ $disciplina->titulo }} : {{ $disciplina->ementa }} </li>
        <li>{{ $disciplina->ementa }} </li>
@endforeach

</ul>

