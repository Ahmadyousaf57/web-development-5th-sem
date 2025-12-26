<?php
session_start();

// 1. Connect to database
$connection = mysqli_connect("localhost", "root", "", "dbstudentportal");

if (!$connection) {
    die("Database Connection Failed: " . mysqli_connect_error());
}

// 2. Receive POST data
$email    = mysqli_real_escape_string($connection, $_POST['email']);
$password = $_POST['password']; // plain text

// 3. Check user credentials
$query = "
    SELECT * FROM students 
    WHERE email='$email' AND password='$password'
    LIMIT 1
";

$result = mysqli_query($connection, $query);

// 4. Verify and create session
if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $_SESSION["LoginInfo"] = "Ok";
    $_SESSION["full_name"] = $row["full_name"];
    header("Location: home.php");
    exit();
} else {
    // Login failed
    header("Location: login.php");
    exit();
}

// 5. Close connection
mysqli_close($connection);
?>
