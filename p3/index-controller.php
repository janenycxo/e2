<?php

session_start();

if (isset($_SESSION['correct'])) {
    $results = $_SESSION['correct'];
    $showResults = true;
    $_SESSION['results'] = null;

} else {
    $showResults = false;
}
