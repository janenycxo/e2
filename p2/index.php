<?php require 'index-controller.php'; ?>
<!doctype html>
<html lang='en'>

<head>
  
    <title>Project 2 Multiplayer Game</title>
    <meta charset='utf-8'>
  
</head>

<body>

    <h1>Rock/Paper/Scissors Game</h1>
    This is a popular 2 player game played all over the world. It is a short game meant to quickly select someone. Such as who goes first, or who gets the last candy bar etc... This game is not restricted to 2 players and many people can also play together, unlike some other games which restrict the number of players.
    
    <h2>Mechanics</h2>
    The rules of the game is pretty simple. There are three shapes thrown by hand.
    ROCK is when you hold your hand in a fist. PAPER is when you hold your hand out in the high five sign. SCISSORS is when you position your pointer and middle finger in a peace sign.
    ROCK beats SCISSORS, SCISSORS beat PAPER, and PAPER beats ROCK.

    <h3>Results</h3>
    This game is played by throwing out these hand signs.
    On the count of three, or by chanting rock/paper/scissor all hands must be thrown in unison every single time to avoid room for error.
    If both players throw the same sign, repeat until one wins.
    
    <ul>
        <li>Player 1 throws SCISSORS sign <?php echo $player1throw; ?></li>
        <li>Player 2 throws PAPER sign <?php echo $player2throw; ?></li>
        <li>Which player threw the winning sign <?php echo $throw; ?></li>
        <li>The winner is <?php echo $winner; ?></li>
    </ul>

</body>

</html>
