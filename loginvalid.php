<form method="post">
    Username: <input type="text" name="username"><br>
    Password: <input type="password" name="password"><br>
    <button type="submit">Submit</button>
</form>

<?php
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (strlen($username) >= 4 && strlen($username) <= 8 && strpos($username, '@') !== false && strlen($password) >= 6 && strlen($password) <= 12) {
        echo "Valid username and password.";
    } else {
        echo "Invalid username or password.";
    }
}
?>
