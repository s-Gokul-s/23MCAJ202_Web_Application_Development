<!DOCTYPE html>
<html>
<head>
    <title>Processed Student Array</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['students'])) {
        $input = $_POST['students'];
        
        // Convert input string to array
        $students = array_map('trim', explode(",", $input));

        echo "<h2>Original Array</h2><pre>";
        print_r($students);
        echo "</pre>";

        $asc = $students;
        asort($asc);
        echo "<h2>Sorted Array (Ascending - asort)</h2><pre>";
        print_r($asc);
        echo "</pre>";

        $desc = $students;
        arsort($desc);
        echo "<h2>Sorted Array (Descending - arsort)</h2><pre>";
        print_r($desc);
        echo "</pre>";
    } else {
        echo "<p class='error'>No student names received. Please go back and enter some names.</p>";
    }
    ?>
    <a href="index.html">← Go Back</a>
</div>
</body>
</html>
