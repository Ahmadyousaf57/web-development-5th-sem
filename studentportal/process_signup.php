<?php
session_start();

// 1. Connect to database
$connection = mysqli_connect("localhost", "root", "", "dbstudentportal");

if (!$connection) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

// 2. Receive POST data safely
$name     = mysqli_real_escape_string($connection, $_POST['name']);
$email    = mysqli_real_escape_string($connection, $_POST['email']);
$password = mysqli_real_escape_string($connection, $_POST['password']); // plain text

// 3. Insert query
$query = "
    INSERT INTO students (full_name, email, password)
    VALUES ('$name', '$email', '$password')
";

// 4. Execute query
$result = mysqli_query($connection, $query);

// 5. Redirect based on result
if ($result) {
    header("Location: login.php");
    exit();
} else {
    header("Location: signup.php");
    exit();
}

// 6. Close DB
mysqli_close($connection);
?>
