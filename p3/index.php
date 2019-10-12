<?php require 'process-controller.php'; ?>
<!DOCTYPE html>
<html lang='en'>

  <head>

    <title>Project 2 Multiplayer Game</title>
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

    <h1>Select between the 2 Dog Breeds to begin your agility training.</h1>
    Agility training teaches your dog to navigate obstacles, such as weave through poles, negotiate tunnels, high and long jumps and balance on see-saws.
    Certain breeds excel at agility, while others struggle. However, all dogs can benefit from some type of obedience training.
    The computer chooses between the 2 dog breeds, and the player who selects the correct breed wins.
    It is a random selection game.

    <br><br>
    <h3>Rules for this game</h3>
    1. This is a multi-player game.
    <br>2. Players choose a dog breed from the choices given. I selected the top 2 dogs breeds from the AKC list of most popular breeds for the last 5 years.
    <br>3. Players click the radio button to select.
    <br>4. The player whose breed matches the computer's wins.
    <br><br>
    <h2>Mechanics</h2>
    The rules of the game are pretty simple. There are 2 choices to select from. Choose the breed you prefer and the computer will randomly select a breed as well.
    If your choice matches the computer, then you win.
    <br><br>

    <form method='GET' action='process.php'>
      <h1>
        <p>Choose the Dog Breed to begin your agility training. </p>
      </h1>
      <p>Hint: A man's best friend. </p>
      <div>
        <label for='name'>Name</label>
        <input type='text' id='name' name='name'>

        <br>

        <input type='radio' value='Labrador Retriever' id='Labrador Retriever' name='dog breed'>
        <label for='Labrador Retriever'> Labrador Retriever</label>
      </div>

      <div>
        <input type='radio' value='German Shepherd' id='German Shepherd' name='dog breed'>
        <label for='German Shepherd'> German Shepherd</label>
      </div>

      <div>
        <input type='submit'>
      </div>

    </form>


    <h2>Results</h2>
    <ul>

      <li>Player 1 chooses <?php echo $player1choice; ?></li>
      <li>Player 2 chooses <?php echo $player2choice; ?></li>
      <li>The <strong>Winner</strong> is <?php echo $winner; ?></li>
    </ul>

  </body>

</html>

