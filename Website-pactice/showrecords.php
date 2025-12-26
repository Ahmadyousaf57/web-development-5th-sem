<?php
    $con = mysqli_connect("localhost", "root", "", "dbwebsite5e");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap Table Example</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container my-5">
    <h2 class="mb-4 text-center">User Information Table</h2>
    <table class="table table-bordered table-striped table-hover">
      <thead class="table-dark text-center">
        <tr>
          <th>Full Name</th>
          <th>Email</th>
          <th>Mobile Number</th>
          <th>Gender</th>
          <th>User Photo</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php
            $qry = "SELECT * FROM  testing";
            $res = mysqli_query($con, $qry);
            while($row = mysqli_fetch_array($res))
            {
        ?>
        <tr>
          <td>
            <?php
                echo $row['fullname'];
            ?>
          </td>
          <td>
            <?php
                echo $row['email'];
            ?>
          </td>
          <td>
            <?php
                echo $row['mobilenumber'];
            ?>
          </td>
          <td>
            <?php
                echo $row['gender'];
            ?>
          </td>
          <td>
            <img src="images/<?php echo $row['imagename']; ?>" width="50" height="50">
          </td>
          <td>
            <a href="changephoto.php?id=<?php echo $row['id']; ?>">Change Photo</a>| 
            <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>|
            <a href="action/action_delete.php?id=<?php echo $row['id'] ?>">Delete</a>
          </td>
        </tr>
        <?php
            }
        ?>
      </tbody>
    </table>
  </div>

  <!-- Bootstrap JS (optional for interactivity) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
