@extends('templates.master')

@section('title')
All Games Played
@endsection

@section('content')

@if($app->old('resultNotFound'))
<dive class='alert alert-warning'>
Sorry, the result you are looking for is not available.
</div>

<h2>List of Game Results</h2>
<ul>
@foreach($results as $result)
    <li><a href='/result?id={{ $result['id'] }}'>{{ $result['breed'] }}</li>
    @endforeach
</ul>

@endsection