<?php
    if(isset($_SESSION["LoginInfo"]) && $_SESSION["LoginInfo"] == "Ok")
    {
?>
<div class="bg-dark text-white p-3" style="width:240px; height:100vh; position:fixed;">
    <h4 class="mb-4">Student Portal</h4>

    <ul class="nav flex-column">
        <li class="nav-item"><a href="home.php" class="nav-link text-white">Home</a></li>
        <li class="nav-item"><a href="subjects.php" class="nav-link text-white">Subjects</a></li>
        <li class="nav-item"><a href="attendance.php" class="nav-link text-white">Attendance</a></li>
        <li class="nav-item"><a href="process_logout.php" class="nav-link text-white">Logout</a></li>
    </ul>
    
</div>
<?php
    }
    else{
        header("location: login.php");
    }
?>
