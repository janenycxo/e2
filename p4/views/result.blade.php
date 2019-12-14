@extends('templates.master')

@section('title')
Your result {{ $result['id'] }}
@endsection


@section('content')
<h2>Individual results{{ $result['id'] }} for Breeds that began agility training-</h2>

<a href='/results'>All the breeds that began agility training.</a>
  <ul>
<li> Player1 chose {{ $result['player1'] }}. </li>
<li> Player 2 chose {{ $result['player2'] }}. </li>
@if ($result['winner'] == true)
<li> Hooray! You have a dog to begin agility training!</li>
<li> Click to see a list of <a href='/results'>all the dogs that began agility training.</a>
@else ($result['winner'] == false)
<li> Sorry, you do not have a dog to begin agility training. </li>
<li> Click to see a list of  <a href='/results'>all the dogs that began agility training.</a>
</li>
@endif
</ul>

@endsection