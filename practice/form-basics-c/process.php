<?php


session_start();

if ($_GET['dogBreed'] == 'dogBreed') {
    $correct = true;
} else {
    $correct = false;
}

$_SESSION['results'] = $results;

header('Location: index.php');