<!DOCTYPE html>
<html>
<head>
    <title>Indian Cricket Players</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Indian Cricket Players List</h2>
    <?php
    $players = array(
        "Rohit Sharma",
        "Virat Kohli",
        "KL Rahul",
        "Shubman Gill",
        "Ravindra Jadeja",
        "Jasprit Bumrah",
        "Mohammed Shami",
        "Ravichandran Ashwin",
        "Ishan Kishan",
        "Hardik Pandya",
        "Shreyas Iyer"
    );
    echo "<table>";
    echo "<tr><th>S.No</th><th>Player Name</th></tr>";
    foreach ($players as $index => $player) {
        echo "<tr><td>" . ($index + 1) . "</td><td>" . htmlspecialchars($player) . "</td></tr>";
    }
    echo "</table>";
    ?>
    <a href="cricketer.html">← Go Back</a>
</div>
</body>
</html>
