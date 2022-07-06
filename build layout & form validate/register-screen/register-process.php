<?php
session_start();

if(empty($_POST)) header('location: index.php');

$errors = [];

if(empty($_POST['first-name'])) $errors['first-name'] = 'Vui lòng nhập họ';

if(empty($_POST['last-name'])) $errors['last-name'] = 'Vui lòng nhập tên';

if(empty($_POST['email'])){
    $errors['email'] = 'Vui lòng nhập email';
} else if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors['email'] = 'Sai định dạng email';
}

if(empty($_POST['password'])) $errors['password'] = 'Vui lòng nhập mật khẩu';

if($_POST['birth-day'] == 0) $errors['birth-day'] = 'Vui lòng chọn ngày sinh';

if($_POST['birth-month'] == 0) $errors['birth-month'] = 'Vui lòng chọn tháng sinh';

if($_POST['birth-year'] == 0) $errors['birth-year'] = 'Vui lòng chọn năm sinh';

if(!isset($_POST['terms'])) $errors['terms'] = 'Vui lòng đồng ý điều khoản';

if(count($errors) != 0){
    $_SESSION['old'] = $_POST;
    $_SESSION['errors'] = $errors;
    header('location: index.php');
    exit();
}


