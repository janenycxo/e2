<?php

session_start();

if ($_POST['answer'] == 'Labrador Retriever'){
    $correct = 'true';
} else {
    $results = 'Incorrect';
}

