<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $countries = [
        "Bangladesh" => "Dhaka",
        "France" => "Paris",
        "Japan" => "Tokyo",
        "United Kingdom" => "London",
        "United States" => "Washington, D.C."
    ];

    ksort($countries);

    foreach ($countries as $counti => $capital) {
        echo $counti . " - " . $capital . "<br>\n";
    }
    ?>
</body>
</html>