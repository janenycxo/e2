@extends('templates.master')

@section('title')
Random Choice Game
{{ $app->config('appname') }}

@endsection

@section('content')

@if($breed)
<div class='alert alert-success'>
The dog breed you selected {{ $breed }} has been added.
</div>
@endif

@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<h3>Click there for a list of  <a href='/results'>all the dogs that began agility training.</a></h3>


@if($app->errorsExist())
<ul class='error alert alert-danger'>
    @foreach($app->errors() as $error)
    <li>{{ $error }}</li>
    @endforeach
</ul>
@endif

<li><h1>Best in Breed for Agility Training, Which breed would you choose? </h1></li>
      <img alt='AKC Breeds' title='AKC Breeds' 
src='https://www.dogexpress.in/wp-content/uploads/2016/06/German-shepherd-vs-labrador-retriever-660x330.jpg' 
class="center">
<br><br>
    
    <label for='Mechanics'>Mechanics</label>
    <br>This game is played random, by choosing the breed you prefer against the computer's choice.
    <br>Select between dog breeds to represent the dog you will begin working with for agility training.
    <br>Choices are between Labrador Retriever (Voted Most popular breed) or German Shepherd (Voted 2nd Most Popular 
    breed).
   
    <br><br>
    <h3>Click here for <a href='/result'> the dog chosen to begin agility training.</a></h3>

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
    
    <form method='POST' action='/save-new-result'>

        <br>
        <p>Choose the Dog Breed you would like to begin your agility training:</p>
              
          <label for='Labrador Retriever'> Labrador Retriever</label>
          <input type='radio' id='LabradorRetriever' name='breed'>
<br>
          <label for='German Shepherd'> German Shepherd</label>
          <input type='radio' id='GermanShepherd' name='breed'>
          <div>
                <button type='submit'>Woof!</button>
          </div>   
          </fieldset> 
      </form>
      
    <p class='winner'>&rarr; <a href='/results'>List of Dogs the began Agility Training</a></p>
    

    @if($app->errorsExist())
<ul>
    @foreach($app->errors() as $error)
    <li class='or'>{{ $error }}</li>
    @endforeach
</ul>
  @endif

@if ($result)

<h2>Individual results{{ $result['id'] }} for Breeds that began agility training-</h2>
<a href='/results'>All the breeds that began agility training.</a>
  <ul>
      Player1 chose {{ $result['player1'] }}. </li>
      Player 2 chose {{ $result['player2'] }}. </li>

@if ($result['winner'] == 1)
      Hooray! You have a dog to begin agility training!
      Click to see a list of <a href='/results'>all the dogs that began agility training.</a>

      @else ($result['winner'] == 2)
      Sorry, you do not have a dog to begin agility training.
      Click to see a list of  <a href='/results'>all the dogs that began agility training.</a>

@endif 
  </ul>

@endif 
@endsection