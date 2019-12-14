@extends('templates.master')

@section('title')
All Games Played
@endsection

@section('content')

<h2>All Results</h2>

<ul>
@foreach($results as $result)
<li>{{ $result['player1'] }}</li>
@endforeach
</ul>

@endsection