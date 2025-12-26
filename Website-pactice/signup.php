<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Form</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="form-container">
    <h2>Signup Form</h2>
    <form action="action/action_signup.php" method="post" enctype="multipart/form-data">
      <label for="fullname">Full Name</label>
      <input type="text" id="fullname" name="fullname" placeholder="Enter your full name" required>

      <label for="email">Email</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>

      <label for="mobile">Mobile Number</label>
      <input type="tel" id="mobile" name="mobilenumber" placeholder="Enter your mobile number" required>

      <label>Gender</label>
      <div class="gender-group">
        <label><input type="radio" name="gender" value="male" required> Male</label>
        <label><input type="radio" name="gender" value="female"> Female</label>
        <label><input type="radio" name="gender" value="other"> Other</label>
      </div>

      <label for="mobile">Upload Your Photo</label>
      <input type="file" id="mobile" name="myimage" required>

      <button type="submit">Sign Up</button>
    </form>
  </div>
</body>
</html>
