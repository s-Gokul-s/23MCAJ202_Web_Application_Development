<?php
$conn = new mysqli("localhost", "root", "", "php_library");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$accession_no = $_POST['accession_no'];
$title = $_POST['title'];
$authors = $_POST['authors'];
$edition = $_POST['edition'];
$publisher = $_POST['publisher'];

$sql = "INSERT INTO books (accession_no, title, authors, edition, publisher) 
        VALUES ('$accession_no', '$title', '$authors', '$edition', '$publisher')";

if ($conn->query($sql) === TRUE) {
    echo "Book added successfully.<br><a href='book.html'>Go Back</a>";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>
