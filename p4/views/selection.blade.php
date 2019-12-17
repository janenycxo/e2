@extends('templates.master')

@section('title')
Your result {{$selection['id']}}
Your result {{$selection['player2']}}


@endsection

@section('content')
<h2>Dog breed {{$selection['id']}} selected this round.</h2>
  &rarr; <a href='/selections'>Breed Result List</a>
 
  <ul>
  <li> Player 1 chose {{ $selection['player1'] }}. </li>
  <li> Player 2 chose {{ $selection['player2'] }}. </li>

@if ($selection['winner'] == 1)
<li> Player wins!</li>
<li> View all the dogs <a href='/selections'>chosen to begin agility training!</a>
@else ($result['winner'] == 2)
<li> Player did not win. </li>
@endif
</ul>

<br><br>
<div>
<a href='/'>Click to go back to main page and Play Again</a>
</div>

<br><br><a href='/selections'>&larr;Back to the list of Breeds that have started agility training.</a>
@endsection