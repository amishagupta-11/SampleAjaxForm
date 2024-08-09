<?php 
$firstName=strip_tags($_POST['yourFirstName']);
$lastName=strip_tags($_POST['yourLastName']);
$email=strip_tags($_POST['yourEmail']);
$inquiry=strip_tags($_POST['yourInquiry']);

//Validation
if(empty($firstName) || empty($email)||empty($inquiry)){
    header('location:index.php');
    exit();
}



