<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container mt-4">        
        <div class="row">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="login-box">
                <h2 class="text-center mt-2">Login</h2>
                <form action="HomePage.php" method="post" role="form" class="p-2" id="login-form">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input type="password" name="password" class="form-control" placeholder="Password" required minlength=10>
                    </div>                
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="rem" class="cjustom-control-input" id="customCheck">
                        <label for="customCheck" class="custo-control-label">Remember Me</label>
                        <a href="#" id="forgot-btn" class="float-right">Forgot Password?</a>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" name="login" id="login" value="Login" class="btn btn-primary btn-block" >
                </div>               
                </form>
            </div>
        </div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha384-Uq7tE9OMKGCqc3pyboRZ08az3KDI+KFBFriwJ2Spd/QAHtD5Y1KnlgtexFJUmMRi" crossorigin="anonymous"></script>
<script src="library/login.js"></script>
</body>
</html>