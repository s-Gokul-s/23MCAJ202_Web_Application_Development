<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>Student Records from Database</h2>

    <?php
    // Database configuration
    $servername = "localhost";
    $username = "root";         // default XAMPP username
    $password = "";             // default XAMPP password is blank
    $dbname = "webschool";         // database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("<p class='error'>Connection failed: " . $conn->connect_error . "</p>");
    }

    // Fetch data
    $sql = "SELECT id, name, age, grade FROM students";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table>";
        echo "<tr><th>ID</th><th>Name</th><th>Age</th><th>Grade</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . htmlspecialchars($row["id"]) . "</td>
                    <td>" . htmlspecialchars($row["name"]) . "</td>
                    <td>" . htmlspecialchars($row["age"]) . "</td>
                    <td>" . htmlspecialchars($row["grade"]) . "</td>
                  </tr>";
        }

        echo "</table>";
    } else {
        echo "<p>No records found.</p>";
    }

    $conn->close();
    ?>
</div>
</body>
</html>
