@extends('templates.master')

@section('title')
{{ $post['title'] }}
Your result {{ $result['id'] }}
@endsection


@section('content')
<h2>Individual Result</h2>
   <h3>Breed selected this round is- {{ $result['breed']}}</h3>
    <br>
</ul>
<li> Player 1 chose {{ $result['player1'] }}</li>
<li> Player 2 chose {{ $result['player2'] }}</li>
<li> The breed to begin agility training is {{ $result['winner'] }}</li>
<li><strong>{{ $result['winner'] }}</strong></li>
<br>
</ul>
<div>
   <a href='http://p4.janenycxo.me/'>Click go back to main page and Play Again</a>
    </div>

<a href='/results'>&larr;Back to the list of Breeds that have started agility training.</a>
@endsection
