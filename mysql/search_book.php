<?php
$conn = new mysqli("localhost", "root", "", "php_library");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$title = $_GET['title'];
$sql = "SELECT * FROM books WHERE title LIKE '%$title%'";

$result = $conn->query($sql);

echo "<h2>Search Results</h2>";
if ($result->num_rows > 0) {
    echo "<table border='1'>
            <tr>
                <th>Accession No</th>
                <th>Title</th>
                <th>Authors</th>
                <th>Edition</th>
                <th>Publisher</th>
            </tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['accession_no']}</td>
                <td>{$row['title']}</td>
                <td>{$row['authors']}</td>
                <td>{$row['edition']}</td>
                <td>{$row['publisher']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    echo "No book found with the given title.";
}

echo "<br><br><a href='book.html'>Go Back</a>";

$conn->close();
?>
