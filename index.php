<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registeration Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/themes/bootstrap.min.css">
    <link rel="stylesheet" href="css/themes/default.min.css">
    <link rel="stylesheet" href="css/alertify.min.css">
</head>
<body class="bg-dark">
    <div class="container mt-4">
        <div class="row">
            <div class="col-lg-4 offset-lg-4" id="alert">
                <div class="alert alert-success">  
                    <strong id="result"></strong>                  
                </div>
            </div>
        </div>    
        <div class="row">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="login-box">
                <h2 class="text-center mt-2">Login</h2>
                <form action="" method="post" role="form" class="p-2" id="login-form">
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
                    <input type="submit" name="login" id="login" value="Login" class="btn btn-primary btn-block">
                </div>
                <div class="form-group">
                    <p class="text-center">New User? <a href="#" id="register-btn">Register Here</a></p>
                </div>
                </form>
            </div>
        </div> 
        <div class="row">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="register-box">
                <h2 class="text-center mt-2">Register</h2>
                <form action="" method="post" role="form" class="p-2" id="register-form">
                    <div class="form-group">
                        <input type="text" id="first_name" name="FirstName" class="form-control" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <input type="text" id="last_name" name="LastName" class="form-control" placeholder="Last Name" >
                    </div>
                    <div class="form-group"> 
                        <input type="text" id="uname"name="uname" class="form-control" placeholder="Username" required>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" name="email" class="form-control" placeholder="E-mail" required>
                    </div> 
                    <div class="form-group">
                        <input type="password"  name="password" class="form-control" id="pass" placeholder="Password" required minlength=10>
                    </div> 
                    <div class="form-group">
                        <input type="password" name="confirmpassword" class="form-control" id="cpass" placeholder="Confirm Password" required minlength=10> 
                    </div>                                      
                <div class="form-group">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" name="rem" class="cjustom-control-input" id="customCheck2">
                        <label for="customCheck2" class="custo-control-label">I agree to the
                        <a href="#">terms & conditions</a></label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" name="register" id="register" value="Register" class="btn btn-primary btn-block" onclick="redirectToLogin()">
                </div>
                <div class="form-group">
                    <p class="text-center">Already Registered?<a href="#" id="login-btn">Login Here</a></p>
                </div>
                </form>
            </div>
        </div> 

        <div class="row">
            <div class="col-lg-4 offset-lg-4 bg-light rounded" id="forgot-box">
                <h2 class="text-center mt-2">Reset Password</h2>
                <form action="" method="post" role="form" class="p-2" id="forgot-form">
                    <div class="form-group">
                        <small class="text-muted"> 
                            To reset your password, please enter the email address and we will send reset password instructions on your respective email.
                        </small>
                    </div>
                    <div class="form-group">
                        <input type="email" name="Femail" class="form-control" placeholder="E-Mail" required>
                    </div>                             
                    <div class="form-group">
                        <input type="submit" name="forgot" id="forgot" value="Reset" class="btn btn-primary btn-block">
                    </div>
                    <div class="form-group text-center">
                        <a href="#" id="back-btn">Back</a>
                    </div>
                    <div id="response-message" class="text-center"></div>
                </form>
            </div>
        </div> 
    </div>
    <script src="library/alertify.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-vtXRMe3mGCbOeY7l30aIg8H9p3GdeSe4IFlP6G8JMa7o7lXvnz3GFKzPxzJdPfGK" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js" integrity="sha384-Uq7tE9OMKGCqc3pyboRZ08az3KDI+KFBFriwJ2Spd/QAHtD5Y1KnlgtexFJUmMRi" crossorigin="anonymous"></script>
    <script src="library/index.js"></script>
</body>
</html>