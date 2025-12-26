<?php
    session_start();
    if(isset($_SESSION["LoginInfo"]) && $_SESSION["LoginInfo"] == "Ok")
    {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home - User Profile</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="d-flex">

    <?php include "sidebar.php"; ?>

    <div class="container-fluid" style="margin-left:260px; padding-top:20px;">
        <div class="card shadow p-4">
            <h2>User Profile</h2> <?php echo $_SESSION['full_name'];?>
            <hr>

            <div class="row">
                <div class="col-md-4">
                    <img src="https://via.placeholder.com/200" class="img-fluid rounded" alt="Profile Pic">
                </div>

                <div class="col-md-8">
                    <h4>Name: Muhammad Ali</h4>
                    <p><strong>Email:</strong> ali@example.com</p>
                    <p><strong>Roll No:</strong> BSCS-2021-123</p>
                    <p><strong>Semester:</strong> 5th</p>
                    <p><strong>Department:</strong> Computer Science</p>
                </div>
            </div>

        </div>
    </div>

</div>

</body>
</html>

<?php
    }
    else{
        header("location: login.php");
    }
?>
