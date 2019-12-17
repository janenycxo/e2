@extends('templates.master')

@section('title')
Your result {{$selection['id']}}


@endsection

@section('content')
<h2>Dog breed {{$selection['id']}} selected this round.</h2>
  &rarr; <a href='/results'>Breed Result List</a>
 
  <ul>
<li> Player 2 chose {{ucfirst($data['player2'])}}. </li>

@if ($selection['winner'] == 1)
<li> Player Won!</li>
<li> View all the dogs <a href='/results'>chosen to begin agility training!</a>
@else ($result['winner'] == 2)
<li> Player did not win. </li>
@endif
</ul>

<br><br>
<div>
<a href='/'>Click go back to main page and Play Again</a>
</div>

<br><br><a href='/results'>&larr;Back to the list of Breeds that have started agility training.</a>
@endsection