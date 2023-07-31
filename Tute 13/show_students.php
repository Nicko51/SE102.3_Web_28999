<?php
// Connect to the database
$host = "your_host"; // Replace with your database host
$username = "your_username"; // Replace with your database username
$password_db = "your_password"; // Replace with your database password
$database = "university"; // Replace with your database name

$conn = new mysqli($host, $username, $password_db, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and execute the SQL query to select all students from the "students" table
$sql = "SELECT * FROM students";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Name</th><th>Email</th><th>Password</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>".$row["id"]."</td>";
        echo "<td>".$row["name"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["password"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No students found.";
}

// Close the database connection
$conn->close();
?>
