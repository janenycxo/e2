  
@extends('templates.master')

@section('title')
All Games Played
@endsection

@section('content')

@if($app->old('selectionNotFound'))
<div class='alert alert-warning'>
Sorry, the result you are looking for is not available.
</div>
@endif

<h1>Results of Dogs chosen to begin Agility Training</h1>
<a href='/'><&larr;Go back to main page and PLAY again!</a>
<br><h2>Choose a selection below to view round details.</h2>
<ul>
@foreach($selections as $selection)
<li>This dog breed <a href="/selection?id={{$selection['id']}}">will begin agility training for this round.</li></a>

@endforeach
</ul>

@endsection