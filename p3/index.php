<?php require 'index-controller.php';?>

<!DOCTYPE html>
<html lang='en'>
  <head>

    <title>Project 3 Multiplayer Game</title>
    <meta charset='utf-8'>
    <style>
      body {
        font-family: verdana;
        background-color: #d2bcca;
        color: #4A0046;
        font-size: 0.87em;
      }
      h1 {
        font-weight: bold;
      }
    </style>
  </head>

  <body>
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
      <fieldset>
        <legend>Please complete:</legend>
        <div>
          <label for='name'>Name</label>
          <input type='text' id='name' name='name'> 
        </div>

        <br>
        <p>Choose the Dog Breed you would like to begin your agility training:</p>
        <div>
          <input type='radio' id='Labrador Retriever' name='dogBreed' value='Labrador Retriever'>
          <label for='dogBreed'> Labrador Retriever</label>
        </div>
        <input type='radio' id='German Shepherd' name='dogBreed' value='German Shepherd'>
        <label for='dogBreed'> German Shepherd</label>

        <div>
          <button type='submit'>Woof!</button>
        </div>
      </fieldset>
      </form>
   
      <h2>Conclusion</h2>

<?php if($showResults) { ?>
	<ul>
		<li>The dog breed you chose to begin agility training is: <?php echo 
$results['playerchoice']; ?>
	        <li>The dog breed the other player chose is: <?php echo $results['breed']; ?></li>
<?php if ($results['winner'])  {?> You won! Visit <a href="https://www.akc.org"> AKC </a> for more interesting facts about dog 
		breeds.</li> 
<?php } else { ?>
        	Sorry! You did not answer correctly. Please visit <a href="https://www.akc.org"> AKC </a> 
for more interesting facts about dog breeds.</li>
        <?php } ?>
<?php } ?>
    </ul>       
       
  </body>
</html>
