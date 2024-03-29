<?php require 'index-controller.php'; ?>
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

    <h1>Rock/Paper/Scissors Game</h1>
    This is a popular 2 player game played all over the world. It is a short game meant to quickly select someone. Such as who goes first, or who gets the last candy bar etc... This game is not restricted to 2 players and many people can also play together, unlike some other games which restrict the number of players.
    <br><br>
    <h3>RULES FOR TIC-TAC-TOE</h3>
    1. This is a multi-player game.
    <br>2. Players choose to throw ROCK, PAPER or SCISSOR.
    <br>3. On the count of three or by chanting R/P/S players thrown their hand signals in unison.
    <br>4. The player whose hand throw beats the oponent's hand throw wins.
    <br>6. Continue the game until one player beats the oponent.
    <br><br>
    <h2>Mechanics</h2>
    The rules of the game is pretty simple. There are three shapes thrown by hand.
    ROCK is when you hold your hand in a fist. PAPER is when you hold your hand out in the high five sign. SCISSORS is when you position your pointer and middle finger in a peace sign.
    ROCK beats SCISSORS, SCISSORS beat PAPER, and PAPER beats ROCK.
    This game is played by throwing out these hand signs.
    On the count of three, or by chanting rock/paper/scissor all hands must be thrown in unison every single time to avoid room for error.
    If both players throw the same sign, repeat until one wins.
    <br><br>
    <h2>Results</h2>

    <ul>
      <li>Player 1 throws <?php echo $player1throw; ?></li>
      <li>Player 2 throws <?php echo $player2throw; ?></li>
      <li>The <strong>Winner</strong> is <?php echo $winner; ?></li>
    </ul>

  </body>

</html>
