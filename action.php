<?php

header('Content-Type: application/json');
require 'dbConfig.php';
require 'vendor/autoload.php';

if (isset($_POST['action']) && $_POST['action'] == 'register') {
    $fname = check_input($_POST['FirstName']);
    $lname = check_input($_POST['LastName']);
    $uname = check_input($_POST['uname']);
    $email = check_input($_POST['email']);
    $pass = check_input($_POST['password']);
    $cpass = check_input($_POST['confirmpassword']);
    $created = date('Y-m-d H:i:s');

    if ($pass != $cpass) {
        echo 'Password didnot match!';
        exit();
    } else {
        $stmt = mysqli_prepare($con, "SELECT username, email FROM users WHERE username=? OR email=?");
        // Bind parameters
        mysqli_stmt_bind_param($stmt, "ss", $uname, $email);
        // Execute the statement
        mysqli_stmt_execute($stmt);
        // Get result
        $result = mysqli_stmt_get_result($stmt);
        // Fetch the result as an associative array
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if ($row) {
            if ($row['username'] == $uname) {
                echo "Username is not available";
            } elseif ($row['email'] == $email) {
                echo "Email is not available";
            }
        } else {
            $stmt = mysqli_prepare($con, "INSERT INTO users (`First Name`, `Last Name`, username, Email, Password, Confirm_Password, created) VALUES (?,?,?,?,?,?,NOW())");
            mysqli_stmt_bind_param($stmt, "ssssss", $fname, $lname, $uname, $email, $pass, $cpass);
            if (mysqli_stmt_execute($stmt)) {
                echo json_encode(array("success" => true));
            } else {
                echo json_encode(array("success" => false, "message" => "Something went wrong please try again later!"));
            }
        }
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['action'] == 'login') {
        // Validate and sanitize input data
        $username = check_input($_POST['username']);
        $password = check_input($_POST['password']);

        // Perform login authentication
        $query = "SELECT * FROM users WHERE username = ? AND password = ?";
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, "ss", $username, $password);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) == 1) {
            // If login is successful, return success response
            echo json_encode(array("success" => true));
        } else {
            // If login fails, return error message
            echo json_encode(array("success" => false, "message" => "Invalid username or password"));
        }
    } elseif ($_POST['action'] == 'check_user') {
        // Validate and sanitize input data
        $username = check_input($_POST['username']);

        // Check if user exists in the database
        $query = "SELECT * FROM users WHERE username = ?";
        $stmt = mysqli_prepare($con, $query);
        mysqli_stmt_bind_param($stmt, "s", $username);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) == 1) {
            // If user exists, return success response
            echo json_encode(array("success" => true));
        } else {
            // If user does not exist, return error message
            echo json_encode(array("success" => false, "message" => "User does not exist"));
        }
    }
}

function check_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


$response = ['status' => 'error', 'message' => 'An unknown error occurred'];

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action']) && $_POST['action'] == 'forgotPassword') {
    $email = $_POST['Femail'];

    // Check if the email exists in the database
    $query = "SELECT id FROM users WHERE email = ?";
    $stmt = mysqli_prepare($con, $query);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) > 0) {
        // Generate a unique token
        $token = bin2hex(random_bytes(50));
        $tokenExpiration = date('Y-m-d H:i:s', strtotime('+1 hour'));

        // Store the token and its expiration time in the database
        $updateQuery = "UPDATE users SET token = ?, tokenExpiration = ? WHERE email = ?";
        $stmt = mysqli_prepare($con, $updateQuery);
        mysqli_stmt_bind_param($stmt, "sss", $token, $tokenExpiration, $email);
        if (mysqli_stmt_execute($stmt)) {
            // Send the email with the reset link
            $resetLink = 'http://example.com/reset_form.php?token=' . $token;
            $subject = 'Password Reset Request';
            $message = 'Click on the following link to reset your password: ' . $resetLink;

            if (mail($email, $subject, $message)) {
                echo json_encode(['success' => true, 'message' => 'Password reset instructions have been sent to your email.', 'token' => $token]);
            } else {
                echo json_encode(['success' => false, 'message' => 'Failed to send email.']);
            }
        } else {
            echo json_encode(['success' => false, 'message' => 'Database update error']);
        }
    } else {
        echo json_encode(['success' => false, 'message' => 'Email not found.']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Invalid request.']);
}
