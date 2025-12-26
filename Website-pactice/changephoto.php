<?php
$con = mysqli_connect("localhost", "root", "", "dbwebsite5e");

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $qry = "SELECT * FROM testing WHERE id = '$id'";
    $res = mysqli_query($con, $qry);
    $row = mysqli_fetch_array($res);
} else {
    die("Invalid request. No ID provided.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Change Profile Photo</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="form-container">
    <h2>Change Profile Photo</h2>

    <form action="action/action_changephoto.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

      <label>Current Photo:</label><br>
      <img src="images/<?php echo $row['imagename']; ?>" width="100" height="100" style="border-radius: 10px;"><br><br>

      <label for="myimage">Upload New Photo</label>
      <input type="file" id="myimage" name="myimage" required>

      <button type="submit">Update Photo</button>
    </form>
  </div>
</body>
</html>
