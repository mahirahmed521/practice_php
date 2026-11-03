<?php
if (isset($_POST["number"])) {
    $number = $_POST["number"];
    $isPrime = $number >= 2;

    for ($i = 2; $i < $number; $i++) {
        if ($number % $i == 0) {
            $isPrime = false;
            break;
        }
    }

    echo $isPrime ? "$number is a prime number." : "$number is not a prime number.";
}
?>

<form method="post">
    Enter a number: <input type="number" name="number">
    <button type="submit">Check</button>
</form>
