@extends('templates.master')

@section('title')
Random Choice Game
{{ $app->config('appname') }}

@endsection

@section('content')
<h1>Best in Breed for Agility Training, Which breed would you choose? </h1>
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
    <h3>The dog breed <a href='/selection'> has been CHOSEN in this round to begin agility training.</a></h3>

    <br>
    <label for='Rules'>Rules</label>
    <br>
    1. This is a multi-player game.
    <br>2. This game is played random, by choosing the dog you prefer against the computer's choice.
    <br>3. Players choose a dog breed. There are 2 choices. The player whose choice mirrors the computer 
    wins.
    <br>4. If your choice matches, then you WIN. 
    <br>5. If your choice does not match, then you lose.
    <br>6. This is a game of chance, there will be one winner each round. 
    <br>7. Make a selection from the 2 choices, and submit. 
    <br><br>    
    
    <form method='POST' action='/save-new-result'>

        <br>
        <p>Choose the Dog Breed you would like to begin your agility training:</p>
              
          <label for='Labrador Retriever'> Labrador Retriever</label>
          <input type='radio' value='LabradorRetriever' id='LabradorRetriever' name='dog'>
<br>
          <label for='German Shepherd'> German Shepherd</label>
          <input type='radio' value='GermanShepherd' id='GermanShepherd' name='dog'>
          <div>
                <button type='submit'>Woof!</button>
          </div>   
          </fieldset> 
      </form>
      
      @if($app->errorsExist())
<div class='error alert alert-danger'>
Please make a selection.   
</div>
<ul>
    @foreach($app->errors() as $error)
    <li class='or'>{{ $error }}</li>
    @endforeach
</ul>

@endif 

      <h3>Click there for a list of  <a href='/selections'>all the dogs that began agility training.</a></h3> 
@if($selection)
<div class='alert alert-success'>
The dog breed you selected {{$selection['player1']}} has been added.
</div>
@endif




@if($selection)
<div class="alert alert-{{$selection[0]}}">
<ul>
<li>Player 2 chose {{$selection['player2']}}.</li>
<li>   
<li><a href='/selections'>All the breeds that began agility training.</a></li>
   
@if ($selection['winner'] == 0)
      Hooray! You have a dog to begin agility training!
      Click to see a list of <a href='/selections'>all the dogs that began agility training.</a>

      @else ($selection['winner'] == 1)
      Sorry, you do not have a dog to begin agility training.
      
      <br>Click to see a list of  <a href='/selections'>all the dogs that began agility training.</a>
      </div>
@endif 
  </ul>

@endif 
<a href='/selections'>&larr;Back to the list of Breeds that have started agility training.</a>
@endsection