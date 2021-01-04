@extends('layout.app')

@section('content')

<h1>contact page</h1>

@if(count($person))
<ul>

    @foreach($person as $p)
    <li>
    {{$p}}
    </li>
    @endforeach
</ul>
@endif

@stop
@section('footer')
<script>
alert("helooooo");
</script>

@stop
