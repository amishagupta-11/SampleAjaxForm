<?php
if (isset($_GET['token'])) {
    $token = $_GET['token'];
} else {
    die("Invalid request.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="reset-box">
                <h2 class="text-center mt-2">Reset Password</h2>
                <form action="update_password.php" method="post" role="form" class="p-2">
                    <input type="hidden" name="token" value="<?php echo htmlspecialchars($token); ?>">
                    <div class="form-group">
                        <input type="password" name="new_password" class="form-control" placeholder="New Password" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="reset" value="Reset Password" class="btn btn-primary btn-block">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
