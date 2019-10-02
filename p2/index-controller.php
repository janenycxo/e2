<?php
 
//OUTCOME
$winner = null;

//POSSIBLE MOVES
$throws = ['ROCK', 'PAPER', 'SCISSORS'];

//RANDOM SELECTION FROM PLAYERS
$player1throw = $throws [rand (0,2)];
$player2throw = $throws [rand (0,2)];

//THROW COMBINATIONS
if ($player1throw == 'SCISSORS' and $player2throw == 'PAPER') {
    $winner = 'Congrats Player 1! You are the Winner.';
} elseif ($player1throw =='SCISSORS' and $player2throw == 'ROCK') {
    $winner = 'Congrats Player 2! You are the Winner.';
} elseif ($player1throw =='SCISSORS' and $player2throw == 'SCISSORS') {
    $winner = 'Scratch, keep playing!';
} elseif ($player1throw =='ROCK' and $player2throw == 'PAPER') {
    $winner = 'Congrats Player 2! You are the Winner.';
} elseif ($player1throw =='ROCK' and $player2throw == 'ROCK') {
    $winner = 'Scratch, keep playing!';
} elseif ($player1throw =='ROCK' and $player2throw == 'SCISSORS') {
    $winner = 'Congrats Player 1! You are the Winner.';
} elseif ($player1throw =='PAPER' and $player2throw == 'PAPER') {
    $winner = 'Scratch, keep playing!';
} elseif ($player1throw =='PAPER' and $player2throw == 'ROCK') {
    $winner = 'Congrats Player 1! You are the Winner.';
} elseif ($player1throw =='PAPER' and $player2throw == 'SCISSORS') {
    $winner = 'Congrats Player 2! You are the Winner.';
}