

@unless(count($article) == 0)
@foreach($article as $ar)
{{$ar['titel']}}
<br />
 {{$ar['discription']}}

 <br />
 {{$ar['name']}}

 <br />
 {{$ar['job']}}

 <br />
@endforeach

@else
<p>No Article</p>

@endunless