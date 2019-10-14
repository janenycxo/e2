<?php

session_start();

if ($_GET['dogBreed'] == 'Labrador Retriever') {
    $correct = true;
} else {
    $correct = false;
}

$_SESSION['correct'] = $correct;

header('Location: index.php');