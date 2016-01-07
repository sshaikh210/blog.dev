<?php
if ($rand == $guess) {
	$message = "You Guessed Right!";
} else {
	$message = "You Guessed Wrong!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Roll Dice!</title>
</head>
<body>
    <h1>Roll-Dice!</h1>
    <h3><?= $rand ?></h3>
    <h1>Your Guess!</h1>
    <h3><?= $guess ?></h3>
    <h1><?= $message ?></h1>
</body>
</html>