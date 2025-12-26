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
    <title>Subjects</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="d-flex">

    <?php include "sidebar.php"; ?>

    <div class="container-fluid" style="margin-left:260px; padding-top:20px;">

        <div class="card p-3 shadow">
            <h2>Registered Subjects</h2> <?php echo $_SESSION['full_name'];?>
            <hr>

            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Subject Code</th>
                        <th>Name</th>
                        <th>Credit Hours</th>
                        <th>Teacher</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>CS101</td>
                        <td>Programming Fundamentals</td>
                        <td>3+1</td>
                        <td>Dr. Imran</td>
                    </tr>
                    <tr>
                        <td>CS102</td>
                        <td>Discrete Mathematics</td>
                        <td>3</td>
                        <td>Sir Ahmed</td>
                    </tr>
                    <tr>
                        <td>CS203</td>
                        <td>Data Structures</td>
                        <td>3+1</td>
                        <td>Sir Rana</td>
                    </tr>
                    <tr>
                        <td>CS205</td>
                        <td>Database Systems</td>
                        <td>3+1</td>
                        <td>Miss Ayesha</td>
                    </tr>
                    <tr>
                        <td>CS207</td>
                        <td>Operating Systems</td>
                        <td>3+1</td>
                        <td>Dr. Tariq</td>
                    </tr>
                </tbody>
            </table>

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
