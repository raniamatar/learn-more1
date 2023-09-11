<h1>
    {{ $age }}
</h1>
{{'index page'}}<br>

@foreach ($data as $i)
    <li>{{$i}}</li>
@endforeach

