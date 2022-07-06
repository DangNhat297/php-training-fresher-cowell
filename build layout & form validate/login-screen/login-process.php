<?php
session_start();
if(empty($_POST)){
    header('location: index.php');
    exit();
}
$errors = [];

if(empty($_POST['email'])){
    $errors['email'] = 'Email is required';
} else if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors['email'] = 'Email is invalid';
}
if(empty($_POST['password'])){
    $errors['password'] = 'Password is required';
}

if(count($errors) != 0){
    $_SESSION['errors'] = $errors;
    $_SESSION['old'] = $_POST;
    header('location: index.php');
    exit();
} else {
    echo '<script>alert("Passed validate")</script>';
}