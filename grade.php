<form method="post">
    Enter grade (A, B, C, D, or F):
    <input type="text" name="grade" maxlength="1" required>
    <button type="submit">Submit</button>
</form>

<?php
if (isset($_POST["grade"])) {
    $grade = trim($_POST["grade"]);

    if ($grade == "A") {
        echo "Excellent";
    } else if ($grade == "B") {
        echo "Good";
    } else if ($grade == "C") {
        echo "Fair";
    } else if ($grade == "D") {
        echo "Poor";
    } else if ($grade == "F") {
        echo "Failure";
    } else {
        echo "Please enter A, B, C, D, or F.";
    }
}
?>