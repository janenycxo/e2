<?php require 'index-controller.php'; ?>
<!doctype html>
<html lang='en'>

<head>

<form method='GET' action='process.php'>
    <h1>Word Scramble</h1>

    <p>Mystery word: kiumppn</p>
    <p>Hint: Halloween’s favorite fruit</p>

    <label for='answer'>Your guess:</label>
    <input type='text' name='answer' id='answer'>

    <button type='submit'>Check answer</button>
</form>

<?php
var_dump($_GET);
var_dump($_GET['answer']);

if($_GET['answer'] == '') {
    var_dump('You didn’t enter a guess');
}
else if($_GET['answer'] == 'pumpkin') {
    var_dump('Correct!');
}
else {
    var_dump('Incorrect');
}
 

</body>

</html>