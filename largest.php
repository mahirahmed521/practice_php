<form method="post">
    Enter five numbers:<br>
    <input type="number" name="numbers[]" required><br>
    <input type="number" name="numbers[]" required><br>
    <input type="number" name="numbers[]" required><br>
    <input type="number" name="numbers[]" required><br>
    <input type="number" name="numbers[]" required><br>
    <button type="submit">Find largest</button>
</form>

<?php
if (isset($_POST["numbers"]) && count($_POST["numbers"]) === 5) {
    echo "The largest value is: " . max($_POST["numbers"]);
}
?>
