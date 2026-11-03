<form method="post">
    Enter a number:
    <input type="number" name="number" min="0" max="20" required>
    <button type="submit">Find factorial</button>
</form>

<?php
if (isset($_POST["number"])) {
    $number = (int) $_POST["number"];
    $factorial = 1;

    for ($i = 1; $i <= $number; $i++) {
        $factorial *= $i;
    }

    echo "Factorial of $number is $factorial";
}
?>