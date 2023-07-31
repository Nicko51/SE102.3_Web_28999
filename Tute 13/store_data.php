<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input values from the form
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

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

    // Prepare and execute the SQL query to insert data into the "students" table
    $sql = "INSERT INTO students (name, email, password) VALUES ('$name', '$email', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "Student data inserted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>
