<?php
session_start();
$name = "";
$username = "";
$password = "";
$email = "";
$itemname = "";
$itemprice = "";
$amount = "";
$expdate = "";
$type = "";
$errors = array();
$_SESSION['success'] = '';
$conn = mysqli_connect("localhost", "root", "306306ay", "website");

if (isset($_POST['reg'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']); //escape speial char
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['pass']);
    $repassword = mysqli_real_escape_string($conn, $_POST['repass']);

    if (empty($name)) {
        array_push($errors, "full name is required");
    }

    if (empty($username)) {
        array_push($errors, "user name is required");
    }

    if (empty($email)) {
        array_push($errors, "email  is required");
    }

    if (empty($password)) {
        array_push($errors, "password is required");
    }
    if ($password != $repassword) {
        array_push($errors, "password not match");
    }
    $db = mysqli_query($conn, "select * from user where username='$username'");

    if ($db) {
        if (mysqli_num_rows($db) > 0) {
            array_push($errors, "username already exist");
        } else {
            if (count($errors) == 0) {
                mysqli_query($conn, "insert into user
                (fullname,username,email,password) 
                values('$name','$username','$email','$password')");
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "register successfull";
                header('location:home.php');
            }
        }
    }
}
// ///login
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']); //escape speial char
    $password = mysqli_real_escape_string($conn, $_POST['pass']);
    if (empty($username)) {
        array_push($errors, "user name is required");
    }
    if (empty($password)) {
        array_push($errors, "password is required");
    }
    if (count($errors) == 0) {
        $data = mysqli_query($conn, "select * from user where username='$username' AND password ='$password'");
        if (mysqli_num_rows($data) == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['success'] = "login successfull";

            header('location:home.php');
        } else {
            array_push($errors, "error in username or password");
        }
    }
}

// admin panel

if (isset($_POST['send'])) {
    $itemname = mysqli_real_escape_string($conn, $_POST['itemname']);
    $itemprice = mysqli_real_escape_string($conn, $_POST['itemprice']);
    // var_dump($itemprice);
    $amount = mysqli_real_escape_string($conn, $_POST['amount']);
    $expdate = mysqli_real_escape_string($conn, $_POST['expdate']);

    $type = mysqli_real_escape_string($conn, $_POST['type']);


    if (empty($itemname)) {
        array_push($errors, "itemname is required");
    }
    if (empty($itemprice)) {
        array_push($errors, "price is required");
    }
    if (empty($amount)) {
        array_push($errors, "amount is required");
    }
    if (empty($expdate)) {
        array_push($errors, "expdate is required");
    }
    if ($type == 'select-item') {
        array_push($errors, "please selet item");
    }
    if (count($errors) == 0) {
        mysqli_query($conn, "insert into items
        (itemname,itemprice,amount,expdate,type)Values
        ('$itemname','$itemprice','$amount','$expdate','$type')");
        array_push($errors, "done");
    }
}
