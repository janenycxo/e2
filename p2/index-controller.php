<?php

/*
*RULES FOR TIC-TAC-TOE
*1. This is a multi-player game. 
*2. Players choose to throw ROCK, PAPER or SCISSOR.
*3. On the count of three or by chanting R/P/S players thrown their hand signals in unison.
*4. The player whose hand throw beats the oponent's hand throw wins.
*6. If players tie after 3 rounds, the game continues until the next throw that beats the oponent.

*/

//outcome
$result =null;

//Possible Moves
$throws ={'ROCK', 'PAPER', 'SCISSORS'};

//Random selection from players  
$player1throw = $throws [rand (0,2)];
$player2throw = $throws [rand (0,2)];


if ($player1throw == 'SCISSORS' and $player2throw == 'PAPER') {
    $result = 'Congrats Player 1! You are the Winner.';
} elseif ($player1throw =='SCISSORS' and $player2throw == 'ROCK') {
    $result = 'Congrats Player 2! You are the Winner.';
} elseif ($player1throw =='SCISSORS' and $player2throw == 'SCISSORS') {
    $result = 'Scratch, keep playing!';

} elseif ($player1throw =='ROCK' and $player2throw == 'PAPER') {
    $result = 'Congrats Player 2! You are the Winner.';
} elseif ($player1throw =='ROCK' and $player2throw == 'ROCK') {
    $result = 'Scratch, keep playing!';
} elseif ($player1throw =='ROCK' and $player2throw == 'SCISSORS') {
    $result = 'Congrats Player 1! You are the Winner.';

} elseif ($player1throw =='PAPER' and $player2throw == 'PAPER') {
    $result = 'Scratch, keep playing!';
} elseif ($player1throw =='PAPER' and $player2throw == 'ROCK') {
    $result = 'Congrats Player 1! You are the Winner.';
} elseif ($player1throw =='PAPER' and $player2throw == 'SCISSORS') {
    $result = 'Congrats Player 2! You are the Winner.';



