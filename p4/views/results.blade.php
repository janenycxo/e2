@extends('templates.master')

@section('title')
All Games Played
@endsection

@section('content')

@if($app->old('resultNotFound'))
<div class='alert alert-warning'>
Sorry, the result you are looking for is not available.
</div>
@endif

<h3>Results of Breeds Chosen</h3>

<ul>
@foreach($results as $result)
<li><a href='/result?id={{ $result['id'] }}'>{{ $result['id'] }}</li></a>
@endforeach
</ul>

@endsection