{{-- @extends('site2.master')
@section('title','index|bootstrap')
@section('content')
@stop --}}
{{$msg}}<br>
{{$name}}<br>
{{$email}}
@if ($msg=='hello')
<h1>{{'active'}}</h1>
@endif

{{$msg=='hello'? 'active':'non active'}}
