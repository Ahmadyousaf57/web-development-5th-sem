<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign Up</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card p-4 shadow">
                <h3 class="text-center mb-4">Create Account</h3>

                <form action="process_signup.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">Full Name</label>
                        <input name="name" type="text" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input name="email" type="email" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input name="password" type="password" class="form-control">
                    </div>

                    <button class="btn btn-success w-100">Sign Up</button>

                    <p class="text-center mt-3">
                        Already have an account? <a href="login.php">Login</a>
                    </p>
                </form>

            </div>
        </div>
    </div>
</div>

</body>
</html>
