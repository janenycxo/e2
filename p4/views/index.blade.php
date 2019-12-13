@extends('templates.master')

@section('title')
 
 
 Multi-player Game
@endsection

{{ $app->config('app.name') }}

@section('content')
    
<h1>Which Dog would you choose? <br> Best in Breed for Agility Training </h1>
      <img alt='AKC Breeds' title='AKC Breeds' 
src='https://www.dogexpress.in/wp-content/uploads/2016/06/German-shepherd-vs-labrador-retriever-660x330.jpg' 
class="center">

    <h2>MECHANICS</h2>
    This game is played random, by choosing the breed you prefer against the computer's choice.
    <br>Select between dog breeds to represent the dog you will begin working with for agility training.
    <br>Choices are between Labrador Retriever (No. 1 favored breed) or German Shepherd (No. 2 favored 
breed).
    <br>
   
    <br><br><h2>RULES OF THE GAME</h2>
    1. This is a multi-player game.
    <br>2. This game is played random, by choosing the breed you prefer against the computer's choice.
    <br>3. Players choose a dog breed. There are 2 choices. The player whose choice mirrors the computer 
wins.
    <br>4. If your choice matches, then you WIN. 
    <br>5. If your choice does not match, then you lose.
    <br>6. This is a game of chance, thre will be one winner each round. 
    <br>7. Make a selection from the 2 choices, and submit. 
    <br><br><br>    
       
<form method='GET' action='process.php'>
        <br>
        <p>Choose the Dog Breed you would like to begin your agility training:</p>
        <div>
          <input type='radio' id='Labrador Retriever' name='breed' value='Labrador Retriever'>
          <label for='Labrador Retriever'> Labrador Retriever</label>
        </div>
        <input type='radio' id='German Shepherd' name='breed' value='German Shepherd'>
        <label for='German Shepherd'> German Shepherd</label>

        <div>
          <button type='submit'>Woof!</button>
        </div>
      </fieldset>
      </form>
 
 
@endsection