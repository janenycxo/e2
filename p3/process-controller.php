<?php

// Form C Design flow //
// 1. index-controller.php--gets results from session //
// 2. index.php -displays form, and results //
// 3. process.php -processes form data, puts results in session //

session_start();

if (isset($_SESSION['results'])){
    $_results = $_SESSION['results'];
    $showResults = true;
    $_SESSION['results'] = null;
} else {
    $showResults = false;
}



