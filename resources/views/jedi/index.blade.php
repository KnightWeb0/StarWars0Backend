@foreach ($jedis as $jedi )
<hr>

{{$jedi->rank}}  {{$jedi->first_name}}  {{$jedi->surname}}
<br>
midi_chlorian_count: {{$jedi->midi_chlorian_count}}
<br>
Form:  {{$jedi->fighting_style}}
<br>
Padwan: {{ $jedi->Padwan->first_name}}
<br>
{{$jedi->id}}
   <a href="/jedi/{{$jedi['id']}}"> see Jedi </a>
@endforeach

