@extends('templates.master')

@section('title')
Individual Game Result

@endsection

@section('content')
<h2>Individual Game Result</h2>
<li> Player 1 {{ $result['player1'] }}. </li>
<li> Player 2 {{ $result['player2'] }}. </li>
@if ($result['winner'] == 1)
<li> The winner is Player 1!</li>
<li> View a list of <a href='/results'> games played.</a>
@else ($result['winner'] == 2)
<li> The winner is Player 2! </li>
<li> View all <a href='/results'> games played.</a>
</li>
@endsection 