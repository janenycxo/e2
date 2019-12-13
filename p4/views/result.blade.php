@extends('templates.master')

@section('title')
{{ $result['breed'] }}
@endsection

@section('content')

<h2>{{ $result['breed'] }}</h2>

<a href='/results'>&larr; All Results</a>

@endsection 