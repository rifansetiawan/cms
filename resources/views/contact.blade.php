@extends('layouts.app')

@section('content')
    
    <h1>CONTENT PAGE</h1>

    @if(count($people))
        <ul>
            @foreach($people as $person)

                <li>{{$person}}</li>

            @endforeach
        </ul>
    @endif


@stop

@section('footer')
    
    <!-- <script>alert('Hello Rifan')</script> -->

@stop