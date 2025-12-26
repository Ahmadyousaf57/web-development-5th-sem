<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card p-4 shadow">
                <h3 class="text-center mb-4">Log In</h3>

                <form action="process_login.php" method="post">
                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input name="email" type="email" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Password</label>
                        <input name="password" type="password" class="form-control">
                    </div>

                    <button class="btn btn-primary w-100">Login</button>

                    <p class="text-center mt-3">
                        No account? <a href="signup.php">Register</a>
                    </p>
                </form>

            </div>
        </div>
    </div>
</div>

</body>
</html>
