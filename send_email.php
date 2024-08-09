<?php
function sendResetEmail($email, $reset_link) {
    $subject = "Reset Your Password";
    $message = "Click the following link to reset your password: " . $reset_link;
    $headers = "From: no-reply@yourwebsite.com";

    mail($email, $subject, $message, $headers);
}