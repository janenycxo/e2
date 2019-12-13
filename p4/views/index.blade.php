@extends('templates.master')

@section('title')
Random Choice Game
{{ $app->config('appname') }}

@endsection

@section('content')

@if($newBreed)
<div class='alert alert-success'>
      Your game result {{ $newBreed }} has been added.
</div>
@endif

@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<center>

<h1>Best in Breed for Agility Training, Which breed would you choose? </h1>
      <img alt='AKC Breeds' title='AKC Breeds' 
src='https://www.dogexpress.in/wp-content/uploads/2016/06/German-shepherd-vs-labrador-retriever-660x330.jpg' 
class="center">
<br><br>
    <a href='/result'>Click here to see the list of results from all games played.</a> 
    <br><br>
    <label for='Mechanics'>Mechanics</label>
    <br>This game is played random, by choosing the breed you prefer against the computer's choice.
    <br>Select between dog breeds to represent the dog you will begin working with for agility training.
    <br>Choices are between Labrador Retriever (Voted Most popular breed) or German Shepherd (Voted 2nd Most Popular 
    breed).
    <br><br>
    <br>
    <label for='Rules'>Rules</label>
    <br>
    1. This is a multi-player game.
    <br>2. This game is played random, by choosing the breed you prefer against the computer's choice.
    <br>3. Players choose a dog breed. There are 2 choices. The player whose choice mirrors the computer 
    wins.
    <br>4. If your choice matches, then you WIN. 
    <br>5. If your choice does not match, then you lose.
    <br>6. This is a game of chance, thre will be one winner each round. 
    <br>7. Make a selection from the 2 choices, and submit. 
    <br><br>    
    
    <form method='POST' action='/save-new-game'>

        <br>
        <p>Choose the Dog Breed you would like to begin your agility training:</p>
              
          <label for='Labrador Retriever'> Labrador Retriever</label>
          <input type='radio' id='LabradorRetriever' name='breed'>

          <label for='German Shepherd'> German Shepherd</label>
          <input type='radio' id='GermanShepherd' name='breed'>
          

        <div>
          <button type='submit'>Woof!</button>
        </div>
      </fieldset>
      </form>

      @if ($result) 
            <h2> Game Results</h2>

          <ul>
	        <li>The dog breed to begin agility training is: {{$result['player1']}}.</li>
	        <li>The dog breed you chose is: {{$result['player2']}}.</li>

	@elseif ($result['winner'] ==1) Hooray! Let's begin our Agility training with your dog.
	        @else ($result['winner'] ==2) Sorry, you do not have a dog to train right now.
	        
      @endif
	</ul>       
    
    
@endsection        
</center>