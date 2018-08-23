<ul>
@foreach ($disciplinas as $disciplina)
		<a href="/disciplinas/{{ $disciplina->id }}">
        <li>{{ $disciplina->titulo }}  </li>
        <li>{{ $disciplina->ementa }}  </li></a>
        

@endforeach
<ul>


