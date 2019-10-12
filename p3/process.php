<?php require 'process-controller.php'; ?>
<!doctype html>
<html lang='en'>

<head>

    <title></title>
    <meta charset='utf-8'>

</head>

<body>

<?php 

if($correct) { ?>
Congrats, you chose the correct breed!

<?php } else { ?>
Sorry, you did not choose the correct breed :(

<?php } ?>

<br>
<a href='index.php'>Play again...</a>

</body>
</html>


