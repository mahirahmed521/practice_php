<?php
$scores = [
    "Mahir" => 85,
    "Arafat" => 92,
    "Rokon" => 78,
    "Nela" => 88,
    "Sara" => 95
];

$maxStudent = "";
$maxScore = -1;

foreach ($scores as $student => $score) {
    if ($score > $maxScore) {
        $maxStudent = $student;
        $maxScore = $score;
    }
}
?>

<table border="1">
    <tr>
        <th>Student</th>
        <th>Score</th>
    </tr>
    <?php foreach ($scores as $student => $score) { ?>
        <tr>
            <td><?php echo $student; ?></td>
            <td><?php echo $score; ?></td>
        </tr>
    <?php } ?>
</table>

<p>Highest score: <?php echo $maxScore; ?> by <?php echo $maxStudent; ?></p>