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
    <title>Attendance Report</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="d-flex">

    <?php include "sidebar.php"; ?>

    <div class="container-fluid" style="margin-left:260px; padding-top:20px;">

        <div class="card p-3 shadow">
            <h2>Attendance Report</h2> <?php echo $_SESSION['full_name'];?>
            <hr>

            <table class="table table-bordered">
                <thead class="table-success">
                    <tr>
                        <th>Subject</th>
                        <th>Total Classes</th>
                        <th>Attended</th>
                        <th>Percentage</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Programming Fundamentals</td>
                        <td>32</td>
                        <td>29</td>
                        <td>90%</td>
                    </tr>
                    <tr>
                        <td>Discrete Mathematics</td>
                        <td>30</td>
                        <td>27</td>
                        <td>90%</td>
                    </tr>
                    <tr>
                        <td>Data Structures</td>
                        <td>28</td>
                        <td>22</td>
                        <td>78%</td>
                    </tr>
                    <tr>
                        <td>Database Systems</td>
                        <td>27</td>
                        <td>25</td>
                        <td>92%</td>
                    </tr>
                    <tr>
                        <td>Operating Systems</td>
                        <td>26</td>
                        <td>21</td>
                        <td>80%</td>
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