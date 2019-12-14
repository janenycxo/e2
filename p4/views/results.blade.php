@extends('templates.master')

@section('title')
All Games Played
@endsection

@section('content')

<h3>All Results</h3>

<ul>
@foreach($results as $result)
<li>{{ $result['player1'] }}</li>
@endforeach
</ul>

@endsection