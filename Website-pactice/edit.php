<?php
$con = mysqli_connect("localhost", "root", "", "dbwebsite5e");
$id = $_GET['id'];

$qry = "SELECT * FROM testing WHERE id = '$id'";
$res = mysqli_query($con, $qry);
$row = mysqli_fetch_array($res);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit Record</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="form-container">
    <h2>Edit User Details</h2>
    <form action="action/action_update.php" method="post" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">

      <label for="fullname">Full Name</label>
      <input type="text" id="fullname" name="fullname" value="<?php echo $row['fullname']; ?>" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" value="<?php echo $row['email']; ?>" required>

      <label for="mobile">Mobile Number</label>
      <input type="tel" id="mobile" name="mobilenumber" value="<?php echo $row['mobilenumber']; ?>" required>

      <label>Gender</label>
      <div class="gender-group">
        <label><input type="radio" name="gender" value="male" <?php if($row['gender']=='male') echo 'checked'; ?>> Male</label>
        <label><input type="radio" name="gender" value="female" <?php if($row['gender']=='female') echo 'checked'; ?>> Female</label>
        <label><input type="radio" name="gender" value="other" <?php if($row['gender']=='other') echo 'checked'; ?>> Other</label>
      </div>

      <label>Current Photo</label><br>
      <img src="images/<?php echo $row['imagename']; ?>" width="100" height="100"><br><br>

      <label for="myimage">Upload New Photo (optional)</label>
      <input type="file" id="myimage" name="myimage">

      <button type="submit">Update</button>
    </form>
  </div>
</body>
</html>
