@extends('layout')


@section('content')
    <h3>
        {{ str_limit($movie->title, 150) }}
    </h3>
    <p>
        {!! $movie->synopsis !!}
    </p>

@endsection