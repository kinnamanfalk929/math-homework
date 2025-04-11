<?php
// Define variables
$user = "root"; // Your username
$password = ""; // Your password

// Connect to MySQL database
$db = new mysqli("localhost", $user, $password, "math_homework_solutions");

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Example SQL query
$sql = "SELECT * FROM students WHERE id = 123";

$result = $db->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - name: " . $row["name"] . "<br>";
    }
} else {
    echo "No results found.";
}

// Close database connection
$db->close();
?>
